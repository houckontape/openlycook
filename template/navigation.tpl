 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  {if (isset($messageInfo))}
            <div class="alert alert-warning" role="alert">
        {$messageInfo|default: 'pas de message'}
      </div> 
      {/if} 
  <!-- Button trigger modal -->  
    <div class="container">
      <a class="navbar-brand" href="#">{$title|default:'titre par default'}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="/articles/">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href"/contact/">Contact</a>
          </li>		 
          {if (isset($name))}
          <li class="nav-item">
            <a class="nav-link" href="/repas/">Organiser mes Repas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/recette/">Recette</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="/recette/">Enregistrer une Recette</a>
          </li>		 		 
          <li class="nav-item">
            <a class="nav-link" href="/profil/">Profil</a>
          </li>		 
		{else}
		  <li class="nav-item">
				<a class="nav-link" href="/openlycook/inscription/">Inscription</a>
		</li>
		
		{/if} 
        </ul>    
	{if (isset($name))}
		<div class="badge badge-primary text-wrap" style="width: 6rem;">
		Bienvennue {$name}
		</div>    
		{else}
		  <!-- Button trigger modal -->
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
				connection
		</button>
	{/if}
      </div>
    </div>
    
  </nav>

<!--contenur fenetre modal connection -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Connection</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">     
    
      <form  action="/openlycook/" method ="post">
        <fieldset>
        <legend>Inscription</legend>
          <div>
            <label for="mail">email:</label>
            <input type="e-mail" id="mail" name="mail">
          </div>
            <div>
              <label for="pass">password:</label>
              <input type="password" id="pass" name="password">
            </div>
            <div class="button">
              <button type="submit">Je me connecte</button>
             </div>
            </fieldset>
           </form>
          </div>         
        </div>
      </div>
    </div>
  </div>

</div>
  