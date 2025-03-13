<div>
  
  @if (session()->has("message"))
  <div class="alert alert-success text-success">
    {{ session('message') }}
    </div>
 @endif
   <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-image u-shading u-section-1" id="sec-4b06" src="" data-image-width="1380" data-image-height="920">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500">POSTULER &amp; DEVENEZ LEADER</h2>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-valign-bottom-sm u-valign-bottom-xs u-section-2" id="sec-a4eb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-grey-5 u-radius u-form-1">
          <form action="" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form"  wire:submit.prevent="submit">
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-1">
              <label for="name-ebb6" class="u-label">Secteur</label>
              <input type="text" placeholder="Votre secteur" id="name-ebb6" name="secteur" class="u-border-none u-input u-input-rectangle u-radius u-input-1" required="">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
              <label for="name-ebb6" class="u-label">Business plan</label>
              <input type="file" placeholder="Business plan" id="name-ebb6" wire:model="BP" class="u-border-none u-input u-input-rectangle u-radius u-input-2" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-9807" class="u-label">Responsabilité Sociétale</label>
              <input type="file" placeholder="Responsabilité Sociétale" id="email-9807" wire:model="RS" class="u-border-none u-input u-input-rectangle u-radius u-input-3" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-4">
              <label class="u-label u-label-4">PLan d'Etude d'impact Environnementale </label>
              <input type="file" placeholder="PLan d'Etude d'impact Environnementale " id="name-933a" wire:model="PIE" class="u-border-none u-input u-input-rectangle u-radius u-input-4" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-5">
              <label class="u-label">Etats Finaniers</label>
              <input type="file" placeholder="Etats Finaniers" id="name-b991" wire:model="EtatF" class="u-border-none u-input u-input-rectangle u-radius u-input-5" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-6">
              <label class="u-label">Plan de Croissance</label>
              <input type="file" placeholder="Plan de Croissance" id="name-4d69" wire:model="PC" class="u-border-none u-input u-input-rectangle u-radius u-input-6" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <button type="submit" class="u-btn u-btn-submit u-button-style u-custom-color-4 u-btn-1" >Soumettre</button>
              
            </div>
            <div class="u-form-send-message u-form-send-success">Merci ! Votre message a été envoyé.</div>
            <div class="u-form-send-error u-form-send-message">Impossible d'envoyer votre message. Merci de corriger les erreurs et réessayer.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="2553607f-8c17-e0cd-86ed-89048cd4b033">
          </form>
        </div>
      </div>
    </section>
    
    
    

</div>
