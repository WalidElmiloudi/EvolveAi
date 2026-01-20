<?php if(isset($_SESSION['toast'])): ?>
    <script>
        Toastify({
                text: "<?= $_SESSION['toast']['message'] ?>",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", 
                position: "left", 
                stopOnFocus: false,
                style: {
                    background: "linear-gradient(to right, #de740a, #ff0000)",
                },
                onClick: function(){}
}).showToast();
    </script>
    <?php unset($_SESSION['toast']) ?>
<?php endif; ?>