 <? php
      	 if ($_SERVER['REQUEST_METHOD']==="POST"){
      	 	
            $Category =$_POST['Category'];
            $Unit =$_POST['Unit'];
            $Rate =$_POST['Rate'];

            if (empty ($Category) or empty($Unit) or empty($Rate)){
                 echo "Please fill the boxes properly";
            }
            else{
                $Category = sanitize ($Category);
            $Unit =  sanitize ($Unit);
            $Rate = sanitize($Rate);
                
                $handle=fopen("users.json",'w');
                $arr1 =  array('Category'=>$Category,'Unit'=>$Unit,'Rate'=>$Rate  );
                $json = json_encode($arr1);
                $res = fwrite($handle, $json);

                }

            }
            ?>
      	 }