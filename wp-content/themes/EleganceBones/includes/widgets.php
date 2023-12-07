<?php
if (!defined('ABSPATH')) die();


//Mensaje de Descuento
class Widget_Mensaje_Descuento extends WP_Widget
{
    // Constructor del widget
    public function __construct()
    {
        parent::__construct(
            'widget_mensaje_descuento',
            'Mensaje de Descuento',
            array('description' => 'Muestra un mensaje de descuento en la tienda.')
        );
    }

    // Formulario de configuración del widget
    public function form($instance)
    {
        $mensaje_descuento = !empty($instance['mensaje_descuento']) ? $instance['mensaje_descuento'] : '';
?>
        <p>
            <label for="<?php echo $this->get_field_id('mensaje_descuento'); ?>">Mensaje de Descuento:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('mensaje_descuento'); ?>" name="<?php echo $this->get_field_name('mensaje_descuento'); ?>" type="text" value="<?php echo esc_attr($mensaje_descuento); ?>" />
        </p>
<?php
    }

    // Guarda la configuración del widget
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['mensaje_descuento'] = (!empty($new_instance['mensaje_descuento'])) ? sanitize_text_field($new_instance['mensaje_descuento']) : '';

        return $instance;
    }

    // Muestra el widget en el sitio
    public function widget($args, $instance)
    {
        $mensaje_descuento = !empty($instance['mensaje_descuento']) ? $instance['mensaje_descuento'] : '';
        echo '<div class="mensaje-descuento">' . esc_html($mensaje_descuento) . '</div>';
    }
}

// Registra el widget
function registrar_widgets()
{
    register_widget('Widget_Mensaje_Descuento');
}

add_action('widgets_init', 'registrar_widgets');


//Ubicaciones para los widgets (sidebar = ubicacion)
function widgets_ubications()
{
    //Mensaje de descuento
    register_sidebar([
        "name" => "Parte Superior",
        "id" => "sidebar_descuento",
        "before_widget" => "<div class='mensaje_descuento'>",
        "after_widget" => "</div>"
    ]);

    //Sidebar Filtros
    register_sidebar([
        "name" => "Sidebar Filtros",
        "id" => "sidebar_filtros",
        "before_widget" => "<div class='filtro'>",
        "after_widget" => "</div>"
    ]);
}
add_action("widgets_init", "widgets_ubications");
