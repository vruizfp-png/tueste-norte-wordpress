<?php get_header(); ?>

<main class="contenedor-ficha-cafe">

    <?php
    // Título del café
    the_title('<h1 class="titulo-cafe">', '</h1>');
    ?>

    <div class="ficha-cafe">

        <h2>Ficha del café</h2>

        <ul class="datos-cafe">

            <li><strong>Origen:</strong> 
                <?php echo esc_html( get_field('origen') ); ?>
            </li>

            <li><strong>Notas de cata:</strong> 
                <?php echo esc_html( get_field('notas_cata') ); ?>
            </li>

            <li><strong>Nivel de tueste:</strong> 
                <?php echo esc_html( get_field('nivel_tueste') ); ?>
            </li>

            <li><strong>Intensidad:</strong> 
                <?php echo esc_html( get_field('intensidad') ); ?>
            </li>

            <li><strong>Precio:</strong> 
                <?php echo esc_html( get_field('precio') ); ?> €
            </li>

            <li><strong>Tipo de grano:</strong> 
                <?php echo esc_html( get_field('tipo_grano') ); ?>
            </li>

        </ul>

    </div>

</main>

<style>
    .contenedor-ficha-cafe {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background: #f7f7f7;
        border-radius: 10px;
    }

    .titulo-cafe {
        text-align: center;
        margin-bottom: 30px;
    }

    .ficha-cafe h2 {
        margin-bottom: 20px;
        font-size: 24px;
    }

    .datos-cafe {
        list-style: none;
        padding: 0;
        font-size: 18px;
    }

    .datos-cafe li {
        margin-bottom: 12px;
        padding: 10px;
        background: #fff;
        border-radius: 6px;
        border: 1px solid #ddd;
    }
</style>

<?php get_footer(); ?>

