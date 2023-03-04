let cards_a_afficher=""
fetch('api/index_api.php?actu=tout')
.then(reponse=>{
    return reponse.json()
    })
.then(data=>{
    data.forEach(ligne=>{
        cards_a_afficher+=`<div class="card card2" style="width: 20rem;">
        <img class="card-img-top" src="img/${ligne.img_actu}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${ligne.titre_actu}</h5>
          
          <small>${ligne.date_actu}</small>
               
          <button type="button" class="btn btn-dark btn-bleu"><a href="detail_actu.php?id=${ligne.id_actu}">En savoir plus</a></button>
          
        </div>
   
      </div>`   
    })
    
    document.getElementById('id_actus').innerHTML=cards_a_afficher; /*Dis à l'ID de la section id_actus d'afficher son contenu qui est dans cards_a_afficher*/
})

