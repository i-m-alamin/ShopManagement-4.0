<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $my_items = array_column($_SESSION['cart'], 'ID');
            if (in_array($_POST['id'], $my_items)) {
                echo "<script>
                alert('Item already added!');
                window.location.href = 'productslist.php';
            </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'ID' => $_POST['id'],
                    'Item_Name' => $_POST['item_name'],
                    'Price' => $_POST['price'],
                    'Quantity' => 1
                );
                // print_r($_SESSION['cart']);
                echo "<script>
                alert('Item added!');
                window.location.href = 'productslist.php';
            </script>";
            }
        } else {
            $_SESSION['cart'][0] = array(
                'ID' => $_POST['id'],
                'Item_Name' => $_POST['item_name'],
                'Price' => $_POST['price'],
                'Quantity' => 1
            );
            print_r($_SESSION['cart']);
            echo "<script>
                alert('Item added!');
                window.location.href = 'productslist.php';
            </script>";
        }
    }
    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['ID'] == $_POST['id']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "
            <script>
                alert ('Remove Item?');
                window.location.href = 'my_cart.php';
            </script>";
            }
        }
    }
}

