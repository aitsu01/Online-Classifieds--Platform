# Progetto finale PRESTO
## Studenti: Danilo Amoruso, Gianfranco Cito, Fabrizio Pavone, Anna Vincenzi.

## FRONT-END
**Palette colori utilizzata:**
- rgb(235, 242, 250) *background*
- rgb(30, 16, 20) *text*
- rgb(253, 225, 45) *accent*

**Font utilizzato:**
- Open Sans (dalla libreria *Google Fonts*)

## Funzionalità implementate
- **Navbar** e **Footer** con Blade Components

- **Autenticazione** con Laravel Fortify

- Relazioni **one to many**:
    - User - Articles
    - Category - Articles

- **CRUD** con **Livewire**
    -pulsante "**crea articolo**" nella home e nella navbar
- visualizzazione messaggi di conferma per UX

- homepage con **articoli più recenti**
- pagina dettaglio articoli con **carosello** immagini.
- esplorazione articoli per categoria:
    - dalla navbar con dropdown
    - dalle card e dalla pagina dettaglio con collegamento sul nome della categoria

- possibilità per un utente di diventare moderatore
    - invio mail di richiesta automatico
    - utente reso revisor tramite comando d'automazione
- moderazione annunci pubblicati: un utente revisore può accettare o rifiutare gli annunci
    - dashboard moderatori
    - indice con solo gli annunci accettati
    -

- ricerca full text tramite search-bar
    - per titolo
    - per categoria
    - per descrizione
    
//DONE
- ho ri-ottimizzato la navbar sia da mobile che da desktop; non è più presa da bootstrap ma creata da zero per essere personalizzabile al massimo; ho aggiunto un hamburger button per la visualizzazione da mobile e la searchbox a scomparsa; ora è tutto responsive!
- ho installato la libreria di bootstrap-icons (che prima avevamo solo collegato con le CDN) per non creare fastidiosi rallentamenti al caricamento delle icone. 
PROMEMORIA: la prossima volta che pullate il progetto, per importare anche voi in locale la libreria ricordatevi di lanciare il comando: 
   $ composer require twbs/bootstrap-icons


    

