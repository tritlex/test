function show_credit_offer_promoblock_metabox() {
	global $credit_offer_promoblock_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_promoblock_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';

				break;

			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_metabox() {
	global $credit_offer_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_requirements_metabox() {
	global $credit_offer_requirements_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_requirements_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_loyalty_metabox() {
	global $credit_offer_loyalty_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_loyalty_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_benefits_metabox() {
	global $credit_offer_benefits_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_benefits_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_legal_info_metabox() {
	global $credit_offer_legal_info_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_legal_info_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function show_credit_offer_aff_metabox() {
	global $credit_offer_aff_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($credit_offer_aff_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			// Текстовое поле
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
					        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			// Список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea rows="10" cols="45" name="'.$field['id'].'" id="'.$field['id'].'">'.$meta.'"</textarea>"';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}