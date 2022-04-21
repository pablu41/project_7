<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP PROJECT!</title>
  </head>
  <body>

  <?php 
  //Question 01:

      $questionSets = [
            [
              'question' =>  'What is loream ipsum?',
              'options' =>   'ans1',
                
            ],

            [
              'question' => 'What is loream ipsum?',
              'options' =>   'ans2', 
            ],  

            [
              'question' =>  'What is loream ipsum?',
              'options' =>    'ans3',
            ],

            [
              'question' =>  'What is loream ipsum?',
              'options'  =>    'ans4',
            ],

            [
              'question' =>  'What is loream ipsum?',
              'options' =>    'ans1',
           ],

           [
              'question' =>  'What is loream ipsum?',
              'options' =>    'ans2',
          ],

         [
            'question' =>  'What is loream ipsum?',
            'options' =>    'ans3',
        ],

       [
          'question' =>  'What is loream ipsum?',
          'options' =>    'ans4',
      ],

      [
          'question' =>  'What is loream ipsum?',
          'options' =>  'ans2',
      ],

        [
            'question' =>  'What is loream ipsum?',
            'options'  =>    'ans3',
        ],

      ];
?>
<div class="container mt-5">
<table class="table table-bordered bg-warning ">
  <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Question Name</th>
        <th scope="col">Answer Name</th>
       
      </tr>
  </thead>
<tbody>
  <?php 
     
     foreach($questionSets as $key => $questionSet) { 
  ?>
    <tr>
        <th scope="row"><?php echo ++ $key ?></th>
        <td><?php echo $questionSet['question'];?></td>
        <td><?php echo $questionSet['options'];?></td>
        
    </tr>
    <?php } ?>
</tbody>
</table>
</div>

   




    <?php
    //  Question 02:

       $founders = [
              [ 
                'founder_name' => "md pablu",
                'author_name' => "ceo founder",
                'thumbail' => 'pablu1.jpg',
              ],

              [ 
                'founder_name' => "md saleh",
                'author_name' => "Web designer",
                'thumbail' => 'pablu2.jpg',
              ],

              [ 
                'founder_name' => "md thamid",
                'author_name' => "Web development",
                'thumbail' => 'pablu3.jpg',
              ],

              [ 
                'founder_name' => "Aysha ",
                'author_name' => "Graohice Deisgener",
                'thumbail' => 'pablu4.jpg',
              ],
       ];
    ?>
       <div class="container-mb-5">
           <h1 class="text-center mt-5">our staff</h1>
           <h4 class="text-center mt-2" >There are many variations of passages of Lorem Ipsum available</h3>
           <div class="section-one">
               <div class="row mt-5">
                 <?php
                    foreach($founders as $key=> $founder){

                    

                 ?>
                   <div class="col-md-3">
                     <div class="card m-1">
                        <img class= "card-img-top mt-5" src="images/<?php echo $founder['thumbail']; ?>" alt="">
                        <div class="card">
                          <h3><?php echo $founder['founder_name'];?></h3>
                          <h4><?php echo $founder['author_name'];?></h4>
                        </div>
                      </div>
                   </div>

                 <?php   } ?>
               </div>
           </div>
       </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
