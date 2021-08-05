<?php


class AdmController extends x_Controller
{

    public function inscrire(){
        if(isset($_POST["inscrire"])){
            $this->ajoutAdm();
        }
        $this->load->view("addAdm");
    }

    public function ajoutAdm(){
        extract($_POST);

        $mdp = password_hash($password, PASSWORD_BCRYPT);

        $adm = new Adm(null, $pseudo, $email, $mdp);
        $connexion = new AddModel();

        if($connexion->check($adm)){
            header("Location : index.php?kay=x-users.inscription");
        }else{
            if ($password == $confirm){
                $connexion->inscription($adm);
            }else{
                echo 'Veuillez utiliser le meme mot de passe.';
            }
        }
    }


}