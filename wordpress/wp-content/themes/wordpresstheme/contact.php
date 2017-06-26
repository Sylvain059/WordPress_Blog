   <main class="container">
        <form>

            <div class="form-group">
                <label for="Nom">Votre nom</label>
                <input type="text" class="form-control" id="Nom" placeholder="Entrez votre nom">

            </div>
            <div class="form-group">
                <label for="Prénom">Votre prénom</label>
                <input type="text" class="form-control" id="Prénom" placeholder="Entrez votre prénom">

            </div>
            <div class="form-group">
                <label for="Email">Adresse mail</label>
                <input type="email" class="form-control" id="Email" placeholder="Entrez votre email">
                <small class="form-text text-muted">Votre adresse email restera totalement confidentielle.</small>
            </div>

            <div class="form-group">
                <label for="choix">Choisissez votre distribution</label>
                <select class="form-control" id="choix">
      <option>Debian</option>
      <option>Fedora</option>
      <option>ArchLinux</option>
    </select>
            </div>

            <div class="form-group">
                <label for="Textarea">Entrez votre message</label>
                <textarea class="form-control" id="Textarea" rows="3"></textarea>
            </div>

            <button type="submit" onclick="validation()" class="btn btn-success submit">Envoyer</button>
        </form>
    </main>