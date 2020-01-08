<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> 
            Admin
            <small>Subheading</small>
        </h1>
        <?php
        
        $user = Photo::find_by_id(1);
        echo $user->filename;

        // $users = User::find_all();
        // foreach($users as $user){
        //     echo $user->username;
        // }

        // $photos = Photo::find_all();
        // foreach($photos as $photo){
        //     echo $photo->title;
        // }
        

        // $found_user = User::find_user_by_id(2);
        // $user = User::instantiation($found_user);
        // echo $user->username;

         // foreach($users as $user){
        //     echo $user->last_name . "<br>";
        // }
        
        // $found_user = User::find_user_by_id(2);
        // echo $found_user->username;

        // $user = new User();
        // $user->username = "Example_username5";
        // $user->password = "Example_upassword4";
        // $user->first_name = "John4";
        // $user->last_name = "Doe4";

        // $user->save();

        // $user = User::find_user_by_id(110);
        // $user->username = "Numai4";
        // $user->password = "Egol4";
        // $user->first_name = "John4";
        // $user->last_name = "Doe4";

        // $user->update();

        // $user = User::find_user_by_id(107);
        // $user->delete(); 
        
        // $user = User::find_user_by_id(106);
        // $user->username = "gica";
        // $user->save();

        // $photo = new Photo();
        // $photo->title = "Cea mai poza";
        // $photo->size = 20;

        // $photo->create();

        

        ?> 

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
