<div>
  
   <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-image u-shading u-section-1" id="sec-4b06" src="" data-image-width="1380" data-image-height="920">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500">POSTULER &amp; DEVENEZ LEADER</h2>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-valign-bottom-sm u-valign-bottom-xs u-section-2" id="sec-a4eb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-grey-5 u-radius u-form-1">

          <form action="" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form"  wire:submit="submit">
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-1">
              <label for="name-ebb6" class="u-label">Secteur @error("SC")
            <span class="ml-4 text-danger">le champ est obligatoire</span>
          @enderror</label>
              <input type="text" placeholder="Votre secteur"  wire:model="SC" class="u-border-none u-input u-input-rectangle u-radius u-input-1" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
              <label for="name-ebb6" class="u-label">Business plan @error("BP")
            <span class="ml-4 text-danger">le champ est obligatoire</span>
          @enderror</label></label>
              <input type="file" placeholder="Business plan"  wire:model="BP" class="u-border-none u-input u-input-rectangle u-radius u-input-2" >
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-9807" class="u-label">Responsabilité Sociétale @error("RS")
            <span class="ml-4 text-danger">le champ est obligatoire</span>
          @enderror</label></label>
              <input type="file" placeholder="Responsabilité Sociétale"  wire:model="RS" class="u-border-none u-input u-input-rectangle u-radius u-input-3" >
            </div>
            <div class="u-form-group u-form-name u-form-group-4">
              <label class="u-label u-label-4">PLan d'Etude d'impact Environnementale @error("PIE")
            <span class="ml-4 text-danger">le champ est obligatoire</span>
          @enderror</label></label>
              <input type="file" placeholder="PLan d'Etude d'impact Environnementale " wire:model="PIE" class="u-border-none u-input u-input-rectangle u-radius u-input-4" >
            </div>
            <div class="u-form-group u-form-name u-form-group-5">
              <label class="u-label">Etats Finaniers @error("EF")
            <span class="ml-4 text-danger">le champ obligatoire  </span>
          @enderror</label></label>
              <input type="file" placeholder="Etats Finaniers"  wire:model="EF" class="u-border-none u-input u-input-rectangle u-radius u-input-5" >
            </div>
            <div class="u-form-group u-form-name u-form-group-6">
              <label class="u-label">Plan de Croissance @error("SC")
            <span class="ml-4 text-danger">le champ est obligatoire</span>
          @enderror</label></label>
              <input type="file" placeholder="Plan de Croissance"  wire:model="PC" class="u-border-none u-input u-input-rectangle u-radius u-input-6" >
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <button type="submit" class="u-btn  u-button-style u-custom-color-4 u-btn-1" >Soumettre</button>
            
            </div>
          </form>
        </div>
      </div>
    </section>
    
    
    

</div>
