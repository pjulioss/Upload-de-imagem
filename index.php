<style type="text/css">

    input{
        display:block;
        padding: 5px;
    }

</style>
<form method="POST" enctype="multipart/form-data">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="">
    <label for="email">Email</label>
    <input type="email" name="email" id="">

    <!-- para multiplos envios de uma vez-->
    <input type="file" name="imagem[]" multiple>

    <!--para apenas 1 envio por vez  -->
    <!-- <input type="file" name="imagem"> -->

    <input type="submit" value="Enviar">
</form>

<?php 

//fazer upload de imagem pelo browser e salva-la em um local

// if(isset($_POST['nome']))
// {
//     if($_FILES['imagem']['type'] == 'image/png')
//     {
//         $nome_arq = md5($_FILES['imagem']['name'].rand(1,999)).".png"; //gerando um nome aleatorio para as imagens enviadas

//         if(isset($_FILES['imagem']))//$_FILES[] var global para verificar arquivos submetidos, formato array
//         {
//             move_uploaded_file($_FILES['imagem']['tmp_name'],'imagens/'.$nome_arq);
//             echo "Imagem enviada!";
//         }
        
//     }
//     elseif($_FILES['imagem']['type'] == 'image/jpeg') 
//     {
//         $nome_arq = md5($_FILES['imagem']['name'].rand(1,999)).".jpg"; //gerando um nome aleatorio para as imagens enviadas

//         if(isset($_FILES['imagem']))//$_FILES[] var global para verificar arquivos submetidos, formato array
//         {
//             move_uploaded_file($_FILES['imagem']['tmp_name'],'imagens/'.$nome_arq);
//             echo "Imagem enviada!";
//         }
//     } else {
//         echo "Só é possivel enviar imagens .JPG ou .PNG";
//     }

// }

//Upload de varias imagens de uma vez
if(isset($_FILES['imagem']))
{
    for ($i=0; $i < count($_FILES['imagem']['name']); $i++) 
    { 
        $nome_arq = md5($_FILES['imagem']['name'][$i].rand(1,999)).'.jpg';
        move_uploaded_file($_FILES['imagem']['tmp_name'][$i], 'imagens/' .$nome_arq);
    }
}


; ?>

