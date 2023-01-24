<div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Ajouter un produit</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                                <li class="breadcrumb-item ">Produit</li>
                                <li class="breadcrumb-item active">Ajouter un produit</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Entrer les information du produit </h4>
                                </div>
                                
                            </div>
                            
                        </div>
                  
                </div>
            </div>
        </div>

       

        <div class="page-wrapper">
            <div class="content container-fluid">
                
                <div class="row settings-tab">
                    
                   
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-body">
                                    <form  method="POST" enctype="multipart/form-data" >
                                       
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Nom du produit</label>
                                            <div class="col-md-10">
                                            <input type="text" class="form-control" name="nomProduit" placeholder="Entrer le nom du produit">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Description</label>
                                            <div class="col-md-10">
                                                <textarea rows="5" cols="5" class="form-control" name="description"
                                                    placeholder="Entrer la description du produit"></textarea>
                                            </div>
                                            <div class="form-group row">

                                            <label class="col-form-label col-md-2">Ajouter des images</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Categorie</label>
                                            <div class="col-md-10">
                                                <select class="form-control form-select" name="categorie">
                                                    <option>-- Selectionner --</option>
                                                    <option>Alimentaire</option>
                                                    <option>Sante </option>
                                                    <option>Electronique</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Prix</label>
                                            <div class="col-md-10">
                                            <input type="number" class="form-control" name="prix">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>

    </div>