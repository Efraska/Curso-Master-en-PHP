<h1>Listado de Notas</h1>
<?php while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->fecha?><br>
<?php endwhile; ?>