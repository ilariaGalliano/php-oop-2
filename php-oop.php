<?php
include_once __DIR__ . '/classes/computer.php';
include_once __DIR__ . '/classes/phones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop</title>
</head>
<body>

    <header>
        <h1>Shop</h1>
    </header>

    <main>
      <h2>Products:</h2>
        <section>
            <?php 
            // istanza phone
            $phone = new Phones ('New' , 'Apple', 'Ios');
            $phone->setPhone('Model: Iphone 12 PRO');
            //var_dump($phone);
            ?>
            <div>
                <h2>Mobile phone</h2>
                </div>
            <div>
                <?php 
                    echo $phone->getPhone();
                ?>
            </div>
            <div>
                <?php 
                    echo $phone->printPhone();
                ?>
            </div>
            
        </section>

        <section>
            <?php 
            // istanza computer
            $pc = new Computer('Special' , 'Dell', 'Linux', 'Dell XPS 13 7390');
            //var_dump($pc);
            ?>
            <div>
                <h2>Computer</h2>
            </div>
            <div>
                <?php 
                   echo $pc->modelPc();
                ?>
            </div>
        </section>
    
    </main>
    
</body>
</html>