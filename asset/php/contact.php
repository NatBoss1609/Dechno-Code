<?php

    include_once "header.php";

?>
    <main>
        <section class="formation1">
            <h1 class="h1_formation">
                ENTRONS EN <br><span>CONTACT.</span>
            </h1>
        </section>
        <section class="partie2_formation">
            <article class="quality_formation">
                <img src="../img/apostrophe_gauche.png" alt="apostrophe">
                <h2>
                    une approche basée sur le respect
                </h2>
                <img src="../img/apostrophe_gauche.png" alt="apostrophe">
            </article>
        </section>
        <section class="contact-section">
            <form id="contactForm" action="" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Numéro de téléphone:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>



<?php

    include_once "footer.php";

?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd76b53e14.js" crossorigin="anonymous"></script>
    <script src="../js/script.js" type="text/javascript"></script>
</body>
</html>