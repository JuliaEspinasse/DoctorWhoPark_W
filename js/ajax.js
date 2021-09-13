let boutons = document.querySelectorAll('.fa-skull-crossbones');
boutons.forEach(bouton => {
    bouton.addEventListener("click",(e)=>{
        user = bouton.id;
        toDelete = document.querySelector(`#${user}`)
        toDelete.remove();
        if(user.length != ""){
            fetch('ajaxDel.php?user='+user,{
                "method":"GET"
            })
            .then(result=>{
                if(result.ok){
                    return result.json();
                }
                else{
                    throw new Error("erreur");
                }
            })
            .then(result=>{
                success = document.createElement("div");
                success.className ="alert alert-success";
                success.innerText = result.valeur+" a bien été supprimé"
                document.body.insertBefore(success,document.querySelector(".users"))
            })
            .catch(err =>{
                console.error(err);
            })
        }
    })
});



