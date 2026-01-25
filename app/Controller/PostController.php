<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Post;

class PostController extends Controller
{
    private Post $postModel;

    public function __construct()
    {
        $this->postModel = new Post();
    }

    /**
     * GET /post/index
    */
    public function index(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $userId = $_SESSION['user_id'] ?? null;

        $posts = $this->postModel->getAllWithLikes($userId);

        require_once '../app/View/community.view.php';
    }

    /**
     * POST /post/create
     */
    public function create(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: /EvolveAi/home/show/');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = trim($_POST['content'] ?? '');

            if (!empty($content)) {
                $this->postModel->create($_SESSION['user_id'], $content);
            }
        }

        header('Location: /EvolveAi/post/index');
        exit;
    }

    /**
     * POST /post/like
     * Like / Unlike
     */
    public function like(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: /post/index');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postId = (int) ($_POST['post_id'] ?? 0);
            $userId = $_SESSION['user_id'];

            if ($postId > 0) {
                if ($this->postModel->isLikedByUser($userId, $postId)) {
                    $this->postModel->unlike($userId, $postId);
                } else {
                    $this->postModel->like($userId, $postId);
                }
            }
        }
        $like_count = $this->postModel->likeCountByPost($postId);
        header('Content-Type: application/json');
        echo json_encode(['success' => true,
                          'likeCount' => $like_count
                         ]);
    }
}
