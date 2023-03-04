<div class="eaux_aside actu_aside">
                <div class="infos_pratiques">
                    <h4>Infos pratiques</h4>
                    <div class="trait "></div>
                    <h5>COVID 19</h5>

                    <p>Un accueil du public est assuré dans les locaux de la Communauté de Communes du <span class="span_strong">lundi au vendredi de 9H à 12H et de 13H30 à 17H</span> dans le respect des gestes barrières. </p>
                    <p>Communauté de Communes, <span class="span_strong">1 rue de l’Hôtel-Dieu à Saint-Lizier</span></p>

                    <p><span class="span_strong">Tél : 05.61.66.71.62 </span></p>
                    <p><span class="span_strong">Mail : contact@couserans-pyrenees.fr</span></p>
                    </p>
                </div>
                <div id="id_detail_actus"></div>
</div>
<script>let cards_a_aff=""
fetch('api/index_api.php?actu=tout')
.then(reponse=>{
    return reponse.json()
    })
.then(data=>{
    data.forEach(ligne=>{
        cards_a_aff+=`<div class="card card2 card_liste">
        <div class="card-body">
          <h5 class="card-title">${ligne.titre_actu}</h5>
          
          <small>${ligne.date_actu}</small>
               
          <button type="button" class="btn btn-dark btn-bleu"><a href="detail_actu.php?id=${ligne.id_actu}">En savoir plus</a></button>
          
        </div>
   
      </div>`  
     /*numeroactu =+; numero actu incremente à chaque fois, puis dire d'afficher toute les actus SAUF celle selctionnée*/
    })
    
    document.getElementById('id_detail_actus').innerHTML=cards_a_aff; /*Dis à l'ID de la section id_actus d'afficher son contenu qui est dans cards_a_afficher*/
})
    </script>