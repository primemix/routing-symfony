<!-- example.com/src/pages/index.php -->
Hello <?php echo htmlspecialchars(isset($name) ? $name : 'GeekHub', ENT_QUOTES, 'UTF-8') ?>