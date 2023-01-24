
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Produit</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                                <li class="breadcrumb-item active">Produit</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <a href="ajoutProduit.php" class="btn btn-primary">Ajouter </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Categorie</th>
                                                <th>Description</th>
                                                <th>Quantité</th>
                                                <th>Editer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                while($ligne=$produit->fetch_assoc()){
                                                   
                                               // $im = $ligne['image'];
                                            ?>
                                            <tr>
                                                <td><div class="avatar">
                                                            <img class="avatar-img rounded" alt="Image utilisateur" src="../asset/images/<?=$ligne['image']?>">
                                                            </div></td>
                                                <td><?= $ligne['nomProduit']?></td>
                                                <td><?= $ligne['categorie']?></td>
                                                <td><?= $ligne['description']?></td>
                                                <td>10</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="?edit" class="btn btn-sm bg-success-light me-2">
                                                            <i class="fe fe-pencil"></i>
                                                        </a>
                                                        <a href="?del" class="btn btn-sm bg-danger-light">
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