<?php

namespace hypeJunction\Interactions;

$spanish = array(
	/**
	 * SETTINGS
	 */
	'interactions:settings:max_comment_depth' => 'Profundidad del árbol de comentarios',
	'interactions:settings:max_comment_depth:help' => '¿Hasta dónde se pueden responder las respuestas a los comentarios? 1 = sin respuestas, 5 = respuestas permitidas hasta 4º descendiente',
	'interactions:settings:comment_form_position' => 'Posición del formulario de comentarios',
	'interactions:settings:comment_form_position:help' => '¿Dónde debe colocarse el formulario en relación con la lista de comentarios?',
	'interactions:settings:comment_form_position:before' => 'Antes de la lista',
	'interactions:settings:comment_form_position:after' => 'Después de la lista',
	'interactions:settings:comments_order' => 'Comentarios ordenados',
	'interactions:settings:comments_order:help' => '¿En qué orden se deben mostrar los comentarios?',
	'interactions:settings:comments_order:chronological' => 'Cronológico',
	'interactions:settings:comments_order:reverse_chronological' => 'Cronológicamente inverso',
	'interactions:settings:comments_load_style' => 'Visualización y carga de comentarios',
	'interactions:settings:comments_load_style:load_older' => 'Mostrar los comentarios más nuevos con un enlace para cargar comentarios anteriores',
	'interactions:settings:comments_load_style:load_newer' => 'Mostrar comentarios antiguos con un enlace para cargar nuevos comentarios',
	'interactions:settings:comments_limit' => 'Número de comentarios para mostrar en una lista parcial o resumen',
	'interactions:settings:comments_load_limit' => 'Número de comentarios para mostrar en una lista completa',
	'interactions:settings:default_expand' => 'Ampliar ficha de comentarios',
	'interactions:settings:default_expand:help' => 'De forma predeterminada, los comentarios no se muestran en las listas de resumen o en el río hasta que el usuario seleccione una pestaña',
	'interactions:settings:comment_sort' => 'Permitir búsqueda y filtrado',
	'interactions:settings:comment_sort:help' => 'Agregar interfaz de búsqueda y filtro a bloques de comentarios individuales',
	'interactions:settings:enable_attachments' => 'Habilitar archivos adjuntos',
	'interactions:settings:enable_attachments:help' => 'Permitir a los usuarios adjuntar archivos a los comentarios',
	'interactions:settings:enable_url_preview' => 'Habilitar previsualizaciones de URL',
	'interactions:settings:enable_url_preview:help' => 'Seleccione las URL desde el texto del comentario y añada previsualizaciones de URL',
	'hypeInteractions:usersettings:title' => 'Comentarios',
	/**
	 * PAGES
	 */
	'interactions:comments:title' => 'Comentarios sobre %s',
	'interactions:likes:title' => 'Gente a quien le gusta %s',
	'interactions:comments:edit:title' => 'Editar comentario',
	/**
	 * COMMENT ENTITY
	 */
	'interactions:comment:create' => 'Comentar',
	'interactions:reply:create' => 'Respuesta',
	'interactions:likes:before' => 'Me gusta',
	'interactions:likes:after' => 'No me gusta',
	'interactions:comment:subject' => 'Comentario de %s',
	'interactions:comment:body' => '%s<span>: </span>%s',
	/**
	 * NOTIFICATIONS
	 */
	'interactions:attachments:labelled' => 'Archivos adjuntos: ',
	'interactions:response:email:subject' => '%s %s %s',
	'interactions:response:email:body' => "%s %s %s:

%s

Para responder, haga clic aquí:
%s

Para ver el artículo original, haga clic aquí:
%s

Para ver el prefil de %s, haga clic aquí:
%s

Mensaje autogenerado, no responda a este mensaje.",
	'interactions:likes:notifications:subject' => '%s le gusta %s',
	'interactions:likes:notifications:body' =>
	'%s le gusta %s

Ver post original aquí:
%s

o el perfil de %s aquí:
%s
',
	'interactions:post' => 'enviar',
	'interactions:comment' => 'comentar',
	'interactions:comment:reply_to' => 'sobre %s',
	'interactions:comment:in_thread' => 'en %s',
	'interactions:ownership:own' => 'sus %s',
	'interactions:ownership:your' => 'su %s',
	'interactions:ownership:owner' => '%s de %s',
	'interactions:action:comment:on:object' => 'comentado',
	'interactions:action:comment:on:object:comment' => 'responder a',
	'interactions:action:comment:on:object:discussion_reply' => 'responder a',
	'interactions:action:discussion_reply:on:object:discussion' => 'responder a',

	'interactions:object:comment' => 'comentario',
	'interactions:object:discussion' => 'tema de discusión',
	'interactions:object:discussion_reply' => 'respuesta a la discusión',
	'interactions:object:page_top' => 'página',
	'interactions:object:page' => 'página',
	'interactions:object:blog' => 'entrada en el blog',
	'interactions:object:file' => 'archivo',
	'interactions:object:hjwall' => 'entrada en el muro',
	'interactions:object:bookmarks' => 'elemento marcado',
	'interactions:group:default' => 'grupo',
	'interactions:user:default' => 'usuario',
	/**
	 * ACTIONS
	 */
	'interactions:detach' => 'despegar',
	'interactions:detach:success' => 'El artículo se ha desprendido correctamente',
	'interactions:detach:error' => 'El artículo no se pudo separar',
	/**
	 * RIVER
	 */
	'interactions:like:object:default' => '%s le gusto %s',
	'interactions:comments:no_results' => 'No se han hecho comentarios',
	'interactions:likes:no_results' => 'Todavía no existen me gusta',
);

add_translation("es", $spanish);
