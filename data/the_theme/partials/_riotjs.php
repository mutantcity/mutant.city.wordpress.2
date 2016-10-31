    <?php //Figure out how to refactor all of this bloat!!! ?>

    <!-- Riot  related scripts/tags -->
    <script src="<?php echo vendor_uri(). '/riot_tags/riot-support.js' ?>"></script>
    <script src="<?php echo vendor_uri() . '/bafflejs/baffle.min.js' ?>" ></script>
    <script src="<?php echo vendor_uri() . '/riot_tags/baffle-tags.js' ?>" type="riot/tag"></script>
    <script src="<?php echo vendor_uri(). '/riotjs/riot+compiler.min.js' ?>"></script>
    <!-- mount riotjs normally -->
    <script>
      riot.mount('*')
    </script>