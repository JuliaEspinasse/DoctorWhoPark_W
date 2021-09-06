//----------------------------------------------------------------------------------------
//                                  CONSTANTES
//----------------------------------------------------------------------------------------

//const url = "http://localhost:8080/"
const url = "http://192.168.1.17:8080/"
//const listNombres = '<select class="form-select" aria-label="Default select example"><option selected>0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></div>'

//----------------------------------------------------------------------------------------
//                                  Scrolling Effect
//                                      navbar
//----------------------------------------------------------------------------------------
    let observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach((el) => {
            let nav = document.querySelector("nav.navbar")    
            if (!el.isIntersecting) {
                nav.style.backgroundColor = "transparent"
            } else {
                nav.style.backgroundColor = "#1c2436"
            }
        })
    }, {threshold: 0.5})

    let target = document.querySelector(".rowOne")
    observer.observe(target)


/*********************************** Ajouter *********************************************/
//----------------------------------------------------------------------------------------
//                                  ABONNES
//                      Avec le formulaire d'inscription 
//----------------------------------------------------------------------------------------
    // function sendClient() {
    //     console.log("coucou")

    //     let mybody = {
    //         "name": document.getElementById("name").value,
    //         "firstname": document.getElementById("firstname").value,
    //         "email": document.getElementById("email").value,
    //         "mdp": document.getElementById("mdp").value,
    //         "phone": document.getElementById("phone").value,
    //         "birthday": document.getElementById("birthday").value,
    //         "codePostal": document.getElementById("codePostal").value,
    //         "ville": document.getElementById("ville").value
    //         }
        
    // console.log(mybody.name)

    //     fetch(url + 'addUser', {
    //     method: 'post',
    //     headers:{
    //         "accept":"application/json",
    //         "Content-Type":"application/json"
    //     },
    //     body: JSON.stringify(mybody)
    //     })
    //     .then(function(response){
    //         alert("Felicitation ! votre compte à bien été créé ")
    //     })
    // }

/********************************** Afficher *********************************************/
//----------------------------------------------------------------------------------------
//                                  ABONNES
//                               dans un tableau
//----------------------------------------------------------------------------------------
    // function getUsers() {
    //     console.log('-----------> AVANT');
    
    //     fetch(url + 'getUsers')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {
    
    //             let html = ''
    //             for (let i = 0; i < data.length; i++) {
    //                 let user = data[i];
    //                 console.log(data[i]);
    //                 html += '<tr class="ligne-body"><th>' + user.id + '</th><td>' + user.name + '</td><td>' + user.firstname + '</td><td>' + user.email + '</td><td>'+ user.phone + '</td><td>'+ user.birthday + '</td><td>'+ user.codePostal + '</td><td>'+ user.ville + '</td></tr>';
    //             }
    //             document.getElementById('users').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }


//----------------------------------------------------------------------------------------
//                                  TARIF BILLET
//                                  dans un modal
//----------------------------------------------------------------------------------------
    // function getTarifBillet() {
    //     console.log('-----------> AVANT');

    //     fetch(url + 'getCard/9')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {

    //             let html = ''
    //             let categories= data.listCategorie
    //                 for (let i = 0; i < categories.length; i++){
    //                     html +='<li>'+ categories[i].name + ' - ' + categories[i].montant + listNombres +'</li>';
    //                 }
    //             document.getElementById('tarifBillet').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }

    // function getTarifBillet() {
    //     console.log('-----------> AVANT');
    
    //     fetch(url + 'getCard/9')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {
    
    //             let html = ''
    //             let periods = data.listPeriod
    //             for (let i = 0; i < periods.length; i++) {
    //                 let period = periods[i];
    //                 console.log(data[i]);
    //                 html += '<p>' + period.description + '<ul>';
                    
    //                 let categories= period.listCategorie
    //                 for (let i = 0; i < categories.length; i++){
    //                     html +='<li class="li">'+ categories[i].name + ' - ' + categories[i].montant + listNombres +'</li></div>';
    //                 }
    //                 html +=   '</ul></p>';
    //             }
    //             document.getElementById('tarifBillet').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }
    

//-----------------------------------------------------------------------------------------
//                                 TARIF SEJOUR
//                                 dans un modal
//-----------------------------------------------------------------------------------------
    // function getTarifSejour() {
    //     console.log('-----------> AVANT');

    //     fetch(url + 'getCard/10')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {

    //             let html = ''
    //             let categories= data.listCategorie
    //                 for (let i = 0; i < categories.length; i++){
    //                     html +='<li>'+ categories[i].name + ' - ' + categories[i].montant + '</li>';
    //                 }
    //             document.getElementById('tarifSejour').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }


    // function getTarifSejour() {
    //     console.log('-----------> AVANT');
    
    //     fetch(url + 'getCard/10')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {
    
    //             let html = ''
    //             let periods = data.listPeriod
    //             for (let i = 0; i < periods.length; i++) {
    //                 let period = periods[i];
    //                 console.log(data[i]);
    //                 html += '<ul class="ulSejour">' + period.description ;
                    
    //                 let categories= period.listCategorie
    //                 for (let i = 0; i < categories.length; i++){
    //                     html +='<li>'+ categories[i].name + ' - ' + categories[i].montant + '</li>';
    //                 }
    //                 html +=   '</ul>';
    //             }
    //             document.getElementById('tarifSejour').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }

//----------------------------------------------------------------------------------------
//                                 TARIF COSTUME
//                                 dans un modal
//----------------------------------------------------------------------------------------
    // function getTarifCostume() {
    //     console.log('-----------> AVANT');

    //     fetch(url + 'getCard/11')
    //         .then(function(response) { return response.json() } )
    //         .then(function (data) {

    //             let html = ''
    //             let categories= data.listCategorie
    //                 for (let i = 0; i < categories.length; i++){
    //                     html +='<li>'+ categories[i].name + ' - ' + categories[i].montant + listNombres + '</li>';
    //                 }
    //             document.getElementById('tarifCostume').innerHTML = html;
    //             console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }


    // function getTarifCostume() {
    //     console.log('-----------> AVANT');
    
    //     fetch(url + 'getCard/11')
    //     .then(function(response) { return response.json() } )
    //     .then(function (data) {

    //         let html = ''
    //         let periods = data.listPeriod
    //         for (let i = 0; i < periods.length; i++) {
    //             let period = periods[i];
    //             console.log(data[i]);
    //             html += '<p>' + period.description + '<ul>';
                
    //             let categories= period.listCategorie
    //             for (let i = 0; i < categories.length; i++){
    //                 html +='<li class="li">'+ categories[i].name + ' - ' + categories[i].montant + listNombres +'</li></div>';
    //             }
    //             html +=   '</ul></p>';
    //         }
    //         document.getElementById('tarifCostume').innerHTML = html;
    //         console.log(data);
    //         });
    //     console.log('-----------> APRES');
    // }