

<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/signup-css.css">
    <title>Siswa</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/siswa-css.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css" />
            
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
  
  <style>
    
    header, main, footer,.content {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer,.content {
        padding-left: 0;
      }
    }

    
  </style>
</head>
<body>
<nav class="blue">
  <div class="nav wrapper">
    <div class="container">
<a href="" class="brand-logo center">Perpustakaan</a>
<a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
<ul class="right collection hide-on-small-and-down" style="margin:0px;
      border: 0px solid transparent">
        <li class="collection-item avatar" style="background-color: transparent;min-height: 60px;">
          <a href="" class="tooltipped" data-tooltip="Notifications" data-position="top">
            <i class="material-icons circle white blue-text">notifications_active</i></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<ul class="side-nav fixed" id="sidenav">
  <li>
    <div class="user-view">
<div class="background">
  <img src="<?php echo base_url(); ?>/assets/img/img11.jpg" alt="" class="responsive-img">
</div>

    </div>
  </li>

  <li>
  <a href="<?php echo site_url('homepage/profil')?>"><i class="material-icons blue-text">dashboard</i>My profil
  </a>
</li>

<li>
    <a href="<?php echo site_url('homepage/transaksi')?>"><i class="material-icons blue-text">dashboard</i>Transaksi
    </a>
</li>

<li>
    <a href="<?php echo site_url('homepage/siswa')?>"><i class="material-icons blue-text">dashboard</i>Siswa
    </a>
</li>
<li>
    <a href="<?php echo site_url('homepage/buku')?>"><i class="material-icons blue-text">dashboard</i>Buku
    </a>
</li>


<div class="divider"></div>


<li>
    <a href="<?php echo site_url('login/logout');?>"><i class="material-icons blue-text">exit_to_app</i>Logout
    </a>
</li>
</ul>




<!--SideNav Finished-->

<div class="content">
  <div class="row">
    <!-- <div class="col s12 l4 m4"> -->
      <!-- <div class="card-panel center"> -->
       
      <div class="container">
    <br>  <p class="text-center">Perpustakaan</a></p>
    <hr>





    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Edit Siswa</h4>
        
      
        <p class="divider-text">
            <span class="bg-light">*</span>
        </p>
        <?php foreach($siswa as $u){
            ?>
        
        <form class="form-signin" action="<?php echo site_url('homepage/update_siswa') ?>" method="post">
        <table>
            <tr>
                <td>
                    Id siswa
                </td>
                <td>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="id_siswa" class="form-control"  type="text" value="<?php echo $u->id_siswa ?>">
                  </div> <!-- form-group// -->
                </td>
            </tr>
            <tr>
                <td>
                    NIS
                </td>
                <td>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="nis" class="form-control"  type="text" value="<?php echo $u->nis ?>">
                    </div> <!-- form-group// -->
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                      <input name="nama" class="form-control"  type="text" value="<?php echo $u->nama ?>">
                    </div> <!-- form-group// -->            
                </td>
            </tr>
            <tr>
                <td>
                        Alamat
                </td>
                <td>
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user-circle" aria-hidden="true"></i> </span>
                    </div>
                      <input name="alamat" class="form-control"  type="text" value="<?php echo $u->alamat ?>">
                    </div> <!-- form-group// -->            
                </td>
            </tr>
            <tr>
                <td>
                        Tanggal
                </td>
                <td>      
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>                                    
                    <input name="tgl_lahir" class="form-control" type="date" value="<?php echo $u->tgl_lahir ?>">
                </div> <!-- form-group// -->            
                </td>
            </tr>
            <tr>
                <td>
                        Tanggal
                </td>
                <td>                            
                  <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
                  </div>
                    <input class="form-control" name="kelas" type="text" placeholder="kelas" value="<?php echo $u->kelas ?>">
                  </div> <!-- form-group// -->                   
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>                        
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Edit Siswa</button>
                  </div> <!-- form-group// -->                  
                </td>
            </tr>

        </table>
    </form>
    <?php } ?>
    </article>
    </div> <!-- card.// -->
    </div> 
    <!--container end.//-->
    <br><br>
      <!-- </div> -->
    <!-- </div>   -->
  </div>

</div>
<div class="fixed-action-btn">
  <a href="" class="btn-floating btn-large red white-text pulse tooltipped" data-tooltip="Add New Post" data-position="left"><i class="material-icons ">edit</i></a>
</div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/materialize.min.js"></script>
  
</body>

</html>