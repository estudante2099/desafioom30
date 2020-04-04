    <h3>Lista de Alunos</h3>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?aluno-add=true&action=action-aluno-add" class="btn btn-success">Adicionar Aluno <i class="fas fa-user-plus"></i></a>
    </div>
    <div id="toys-grid">
        <table id="exemploDatatable" class="table" cellpadding="10" cellspacing="1">
            <thead class="thead-dark">  
                <tr>
                    <th><strong>#</strong></th>
                    <th><strong>Nome</strong></th>
                    <th><strong>Nome da Mãe</strong></th>
                    <th><strong>RA</strong></th>
                    <th><strong>Data de Nascimento</strong></th>
                    <th><strong>Estado</strong></th>
                    <th><strong>Opções</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php

                    if (!empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
                <tr>
                    <td><img src="uploads/<?php echo $result[$k]["FOTO"]; ?>" class="img-thumbnail" style="max-height:60px;"></td>                            
                    <td><?php echo $result[$k]["NOALUNO"]; ?></td>
                    <td><?php echo $result[$k]["NOMAE"]; ?></td>
                    <td><?php echo $result[$k]["RA"]; ?></td>
                    <td><?php echo $result[$k]["DTNASCIMENTO"]; ?></td>
                    <td><?php echo $result[$k]["ESTADO"]; ?></td>
                    <td><a class="btnEditar p-2"
                        href="index.php?aluno-edit=true&action=action-aluno-edit&ra=<?php echo $result[$k]["RA"]; ?>">
                        <i class="fas fa-edit"></i>
                        </a>
                        <a class="btnDelete text-red" 
                        href="index.php?action=action-aluno-delete&ra=<?php echo $result[$k]["RA"]; ?>">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
                
            
            
            <tbody>
        
        </table>
    </div>


