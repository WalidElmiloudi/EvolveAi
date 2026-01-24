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
                background: "<?= $_SESSION['toast']['type'] == 'success' ? 'linear-gradient(to right, #059669, #34d399)' : 'linear-gradient(to right, #dc2626, #f87171)' ?>",
                    },
                    onClick: function(){} 
                }).showToast();
                </script>
    <?php unset($_SESSION['toast']) ?>
    
<?php endif; ?>