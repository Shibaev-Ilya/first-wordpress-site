<?php
// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
    add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}
// код блока
function extra_fields_box_func( $post ){
    ?>
    <p><label><input type="text" name="extra[title]" value="<?php echo get_post_meta($post->ID, 'lc-title', 1); ?>" style="width:50%" /> ? заголовок страницы (title)</label></p>
    <p>
        <label>
            <input type="text" name="extra[img]" value="<?php echo get_post_meta($post->ID, 'lc-img', 1); ?>" style="width:50%" /> ? ссылка на изображение
        </label>
    </p>

    <p>Описание статьи (description):
        <textarea type="text" name="extra[description]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'lc-description', 1); ?></textarea>
    </p>


    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <?php
}
// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
    // базовая проверка
    if (
        empty( $_POST['extra'] )
        || ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
        || wp_is_post_autosave( $post_id )
        || wp_is_post_revision( $post_id )
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
    foreach( $_POST['extra'] as $key => $value ){
        if( empty($value) ){
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}
