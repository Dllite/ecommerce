
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Client</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                                <li class="breadcrumb-item active">Liste des clients</li>

                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nom d'utilisateur</th>
                                                <th>Date d'enregistrement </th>
                                                <th>Email</th>
                                                <th>Ville </th>
                                                <th>Pays</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                while($result=$inf->fetch_assoc()){

                                                

                                            ?>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="general.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="assets/img/profiles/avatar-03.jpg"
                                                                alt="User Image"></a>
                                                        <a href="#"><?= $result['nomUtilisateur']?> <span><?= $result['id']?></span></a>
                                                    </h2>
                                                </td>
                                                <td>01 Oct 2022</td>
                                                <td><?= $result['email']?></td>
                                                <td>Douala</td>
                                                <td>Cameroun</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="?user=<?=$result['nomUtilisateur']?>&?id=<?=$result['id']?>" class="btn btn-sm bg-success-light me-2">
                                                            <i class="fe fe-pencil"></i>
                                                        </a>
                                                        <a href="?del=<?=$result['nomUtilisateur']?>&?id=<?=$result['id']?>" class="btn btn-sm bg-danger-light">
                                                            <i class="fe fe-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>