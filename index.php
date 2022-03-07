<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    
            <h1>by 20</h1>
        </div>
        <?php
        $num=50;
        for ($i=10; $i < $num; $i+=10) { 
            ?>
            <div class="">
                <h2><?php echo $i+=10 ?></h2>
            </div>
           
            <?php
        }
        
        ?>

        <?php
            $input=5;
            if ($input >=5 ) {
                ?>
                <div class="">
                    <h1>10,20,30,40,50</h1>
                </div>
            <?php

            } 
        
            else if ($input >5) {
            ?>
            <div class="">
                <h1>odd</h1>
            </div>
            <?php
        }
            else
            {
                ?>
                <div class="">
                    <H1>even</H1>
                </div>
            }

            
            }

        <?php
        }

        ?>

</body>
</html>