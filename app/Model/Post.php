<?php

namespace App\Model;

use App\Core\Database;
use PDO;

class Post
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function create(int $userId, string $content): bool
    {
        $stmt = $this->db->prepare(
            "INSERT INTO post (user_id, content) VALUES (:user_id, :content)"
        );

        return $stmt->execute([
            'user_id' => $userId,
            'content' => $content
        ]);
    }
    public function delete(int $postId): bool
    {
         $stmt = $this->db->prepare(
             "DELETE FROM post WHERE id = :post_id"
        );

        return $stmt->execute([
            'post_id' => $postId
        ]);
    }
//Le rôle de EXISTS ici est de retourner un booléen pour chaque post, indiquant si l’utilisateur a liké ce post ou pas.

    public function getAllWithLikes(?int $userId): array
    {
        $sql = "
            SELECT 
                p.id,
                p.content,
                p.created_at,
                u.username,
                COUNT(l.post_id) AS like_count,
                EXISTS (
                    SELECT 1 FROM \"like\" 
                    WHERE post_id = p.id AND user_id = :user_id
                ) AS liked_by_user
            FROM post p
            JOIN \"user\" u ON u.id = p.user_id
            LEFT JOIN \"like\" l ON l.post_id = p.id
            GROUP BY p.id, u.username
            ORDER BY p.created_at DESC
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'user_id' => $userId ?? 0
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function like(int $userId, int $postId): void
    {
        $stmt = $this->db->prepare(
            "INSERT INTO \"like\" (user_id, post_id) VALUES (:user_id, :post_id)"
        );

        $stmt->execute([
            'user_id' => $userId,
            'post_id' => $postId
        ]);
    }

    public function unlike(int $userId, int $postId): void
    {
        $stmt = $this->db->prepare(
            "DELETE FROM \"like\" WHERE user_id = :user_id AND post_id = :post_id"
        );

        $stmt->execute([
            'user_id' => $userId,
            'post_id' => $postId
        ]);
    }

   public function isLikedByUser(int $userId, int $postId): bool
{
    $stmt = $this->db->prepare(
        "SELECT 1 FROM \"like\" WHERE user_id = :user_id AND post_id = :post_id LIMIT 1"
    );

    $stmt->execute([
        'user_id' => $userId,
        'post_id' => $postId
    ]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return !empty($result);
}

}
