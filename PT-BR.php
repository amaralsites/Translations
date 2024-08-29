<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Ol&aacute;,';
    $t['view_site'] = 'Ver site';
    $t['logout'] = 'Desconectar';
    $t['javascript_msg'] = 'Javascript desabilitado ou n&atilde;o suportado pelo seu navegador.
                            Por favor, atualize seu navegador ou <a href="https://support.google.com/answer/23852" target="_blank">habilite o JavaScript</a> para usar o painel de gerenciamento.';
    $t['add_new'] = 'Criar novo';
    $t['add_new_page'] = 'Criar nova p&aacute;gina';
    $t['add_new_user'] = 'Criar novo usu&aacute;rio';
    $t['view'] = 'Ver';
    $t['list'] = 'Lista';
    $t['edit'] = 'Editar';
    $t['delete'] = 'Excluir';
    $t['delete_selected'] = 'Excluir selecionados';
    $t['advanced_settings'] = 'Configs. avan&ccedil;adas';

    // Sidebar
    $t['comment'] = 'Coment&aacute;rio';
    $t['comments'] = 'Coment&aacute;rios';
    $t['manage_comments'] = 'Gerenciar coment&aacute;rios';
    $t['users'] = 'Usu&aacute;rios';
    $t['manage_users'] = 'Gerenciar usu&aacute;rios';

    // List pages
    $t['view_all_folders'] = 'Todas as pastas';
    $t['filter'] = 'Filtrar';
    $t['showing'] = 'Exibindo';
    $t['title'] = 'T&iacute;tulo';
    $t['folder'] = 'Pasta';
    $t['date'] = 'Data';
    $t['actions'] = 'A&ccedil;&otilde;es';
    $t['no_pages_found'] = 'Nenhuma página encontrada';
    $t['published'] = 'Publicado';
    $t['unpublished'] = 'N&atilde;o publicado';
    $t['confirm_delete_page'] = 'Tem certeza de que deseja excluir'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Tem certeza de que deseja excluir as páginas selecionadas?';
    $t['remove_template'] = 'Remover template';
    $t['template_missing'] = 'Template n&atilde;o encontrado';
    $t['prev'] = 'Ant.'; // Pagination button
    $t['next'] = 'Pr&oacute;x.'; // Pagination button

    // Pages
    $t['welcome'] = 'Boas vindas ao painel de gerenciamento';
    $t['no_regions_defined'] = 'Nenhuma regi&atilde;o edit&aacute;vel definida.';
    $t['no_templates_defined'] = 'Nenhum template sendo gerenciado pelo CMS';
    $t['access_level'] = 'N&iacute;vel de acesso';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrador';
    $t['authenticated_user_special'] = 'Usu&aacute;rio autenticado (Especial)';
    $t['authenitcated_user'] = 'Usu&aacute;rio autenticado';
    $t['unauthenticated_user'] = 'Todos';
    $t['allow_comments'] = 'Permitir coment&aacute;rios de usu&aacute;rios';
    $t['status'] = 'Status';
    $t['name'] = 'Nome';
    $t['title_desc'] = 'deixe este campo em branco caso queira que o sistema gere o nome automaticamente a partir do t&iacute;tulo';
    $t['required'] = 'obrigat&oacute;rio'; // Required field
    $t['required_msg'] = 'Campos obrigat&oacute;rios n&atilde;o podem ficar em branco';
    $t['browse_server'] = 'Pesquisar';
    $t['view_image'] = 'Ver imagem';
    $t['thumb_created_auto'] = 'Ser&aacute; criado automaticamente';
    $t['recreate'] = 'Recriar';
    $t['thumb_recreated'] = 'Miniatura recriada';
    $t['crop_from'] = 'cortando a partir do';
    $t['top_left'] = 'Topo a esquerda';
    $t['top_center'] = 'Topo no centro';
    $t['top_right'] = 'Topo a direita';
    $t['middle_left'] = 'Centro a esquerda';
    $t['middle'] = 'Centro';
    $t['middle_right'] = 'Centro a direita';
    $t['bottom_left'] = 'Rodap&eacute; a esquerda';
    $t['bottom_center'] = 'Rodap&eacute; no centro';
    $t['bottom_right'] = 'Rodap&eacute; a direita';
    $t['view_thumbnail'] = 'Ver miniatura';
    $t['field_not_found'] = 'Campo n&atilde;o encontrado!';
    $t['delete_permanently'] = 'Excluir definitivamente?';
    $t['view_code'] = 'Ver código';
    $t['confirm_delete_field'] = 'Você tem certeza de que deseja realmente excluir este campo?';
    $t['save'] = 'Salvar';

    // Comments
    $t['all'] = 'Todos';
    $t['unapprove'] = 'N&atilde;o aprovar';
    $t['unapproved'] = 'N&atilde;o aprovados';
    $t['approve'] = 'Aprovar';
    $t['approved'] = 'Aprovados';
    $t['select-deselect'] = 'Marcar/Desmarcar todos';
    $t['confirm_delete_comment'] = 'Tem certeza de que deseja excluir este comentário?';
    $t['confirm_delete_selected_comments'] = 'Tem certeza de que deseja excluir os comentários selecionados?';
    $t['bulk_action'] = 'Com os selecionados...';
    $t['apply'] = 'Aplicar';
    $t['submitted_on'] = 'Enviado em';
    $t['email'] = 'Email';
    $t['website'] = 'Site';
    $t['duplicate_content'] = 'Conteúdo duplicado';
    $t['insufficient_interval'] = 'Intervalo insuficiente entre os comentários. Aguarde um pouco e tente novamente.';

    // Users
    $t['user_name_restrictions'] = 'Apenas minúsculas, números, hífen e underscore s&atilde;o aceitos';
    $t['display_name'] = 'Nome a ser exibido';
    $t['role'] = 'Fun&ccedil;&atilde;o';
    $t['no_users_found'] = 'Nenhum usu&aacute;rio encontrado';
    $t['confirm_delete_user'] = 'Tem certeza de que deseja excluir o usuário'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Tem certeza de que deseja excluir os usuários selecionados?';
    $t['disabled'] = 'Desabilitado';
    $t['new_password'] = 'Nova senha';
    $t['new_password_msg'] = 'Se quiser alterar a senha, digite aqui a nova senha. Caso contr&aacute;rio, deixe em branco.';
    $t['repeat_password'] = 'Repita a senha';
    $t['repeat_password_msg'] = 'Digite novamente sua nova senha.';
    $t['user_name_exists'] = 'Usu&aacute;rio j&aacute; existente';
    $t['email_exists'] = 'Endere&ccedil;o de email j&aacute; registrado';

    // Login
    $t['user_name'] = 'Usu&aacute;rio';
    $t['password'] = 'Senha';
    $t['login'] = 'Conectar';
    $t['forgot_password'] = 'Esqueceu sua senha?';
    $t['prompt_cookies'] = 'Os cookies devem estar habilitados para usar este CMS';
    $t['prompt_username'] = 'Por favor, insira seu nome de usu&aacute;rio';
    $t['prompt_password'] = 'Por favor, insira sua senha';
    $t['invalid_credentials'] = 'Usu&aacute;rio ou senha inv&aacute;lidos';	
    $t['account_disabled'] = 'Conta desabilitada';
    $t['access_denied'] = 'Acesso negado';
    $t['insufficient_privileges'] = 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para ver a p&aacute;gina solicitada.
                                    Para ver esta p&aacute;gina, voc&ecirc; dever&aacute; desconectar de sua conta e conectar com uma conta que tenha n&iacute;vel de acesso suficiente.';

    // Password recovery
    $t['recovery_prompt'] = 'Por favor, informe seu nome de usu&aacute;rio ou endere&ccedil;o de email.<br/>
                            Voc&ecirc; receber&aacute; um email com instruções para redefinir sua senha.';
    $t['name_or_email'] = 'Nome de usu&aacute;rio ou email';
    $t['submit'] = 'Enviar';
    $t['submit_error'] = 'Por favor, informe seu nome de usu&aacute;rio ou email';
    $t['no_such_user'] = 'Usu&aacute;rio n&atilde;o encontrado';
    $t['reset_req_email_subject'] = 'Pedido de redefinição de senha';
    $t['reset_req_email_msg_0'] = 'Recebemos um pedido de redefinição de senha para o seguinte site e nome de usu&aacute;rio';
    $t['reset_req_email_msg_1'] = 'Para confirmar o pedido, visite o endereço abaixo. Caso não tenha sido você, basta desconsiderar este email.';
    $t['email_failed'] = 'O email n&atilde;o pode ser enviado.';
    $t['reset_req_email_confirm'] = 'Um email de confirma&ccedil;a&ccedil;&atilde;o foi enviado.<br/>
                                    Por favor, verifique sua caixa de entrada.';
    $t['invalid_key'] = 'Chave inválida';
    $t['reset_email_subject'] = 'Sua nova senha';
    $t['reset_email_msg_0'] = 'Sua senha foi redefinida para o seguinte site e nome de usuário';
    $t['reset_email_msg_1'] = 'Você poderá alterar a sua senha ao conectar-se novamente.';
    $t['reset_email_confirm'] = 'Soa senha foi redefinida.<br/>
                                Por favor, verifique seu email para obter a nova senha.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Em manutenção</h2>
                        <p>
                            Lamentamos o inconveniente.<br/>
                            Neste momento, nosso site est&aacute; passando por uma manuten&ccedil;&atilde;o programada.<br/>
                            <b>Por favor, tente novamente mais tarde.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Painel de Gerenciamento';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Nenhuma pasta definida';
    $t['select_folder'] = 'Selecionar pasta';
    $t['folders'] = 'Pastas';
    $t['manage_folders'] = 'Gerenciar pastas';
    $t['add_new_folder'] = 'Criar nova pasta';
    $t['parent_folder'] = '&Eacute; uma sub-pasta de';
    $t['weight'] = 'Peso';
    $t['weight_desc'] = 'Quanto maior o valor, mais abaixo a pasta aparecer&aacute; na listagem. Pode ser um valor negativo.';
    $t['desc'] = 'Descri&ccedil;&atilde;o';
    $t['image'] = 'Imagem';
    $t['cannot_be_own_parent'] = 'N&atilde;o pode ser sub-pasta de si mesma';
    $t['name_already_exists'] = 'O nome j&aacute; existe';
    $t['pages'] = 'P&aacute;ginas';
    $t['none'] = 'Nenhum';
    $t['confirm_delete_folder'] = 'Tem certeza de que deseja excluir a pasta'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Tem certeza de que deseja excluir as pastas selecionadas?';

    // Drafts
    $t['draft_caps'] = 'RASCUNHO'; // Upper case
    $t['draft'] = 'Rascunho';
    $t['drafts'] = 'Rascunhos';
    $t['create_draft'] = 'Criar rascunho';
    $t['create_draft_msg'] = 'Cria uma c&oacute;pia desta p&aacute;gina (ap&oacute;s salvas as altera&ccedil;&otilde;es)';
    $t['manage_drafts'] = 'Gerenciar rascunhos'; // Plural
    $t['update_original'] = 'Atualizar o original';
    $t['update_original_msg'] = 'Substitui o conte&uacute;do da p&aacute;gina original pelo conte&uacute;do deste rascunho (e apaga o rascunho)';
    $t['recreate_original'] = 'Recriar original';
    $t['no_drafts_found'] = 'Nenhum rascunho encontrado';
    $t['original_page'] = 'P&aacute;gina original';
    $t['template'] = 'Modelo';
    $t['modified'] = 'Modificado em'; // Date of last modification
    $t['preview'] = 'Pr&eacute;-visualizar';
    $t['confirm_delete_draft'] = 'Tem certeza de que deseja excluir este rascunho'; // No question mark please
    $t['confirm_delete_selected_drafts'] = 'Tem certeza de que deseja excluir os rascunhos selecionados?';
    $t['confirm_apply_selected_drafts'] = 'Tem certeza de que deseja aplicar os rascunhos selecionados?';
    $t['view_all_drafts'] = 'Todos os rascunhos';
    $t['original_deleted'] = 'ORIGINAL EXCLUÍDO'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = '&Eacute; uma sub-p&aacute;gina de';
    $t['page_weight_desc'] = 'Quanto maior o valor, mais abaixo a p&aacute;gina aparecer&aacute; na listagem. Pode ser um valor negativo.';
    $t['active'] = 'Ativo';
    $t['inactive'] = 'Inativo';
    $t['menu'] = 'Menu';
    $t['menu_text'] = 'Texto do menu';
    $t['show_in_menu'] = 'Mostrar no menu';
    $t['not_shown_in_menu'] = 'N&atilde;o mostrar no menu';
    $t['leave_empty'] = 'Deixe em branco para usar o t&iacute;tulo da p&aacute;gina';
    $t['menu_link'] = 'Link do menu';
    $t['link_url'] = 'Essa p&aacute;gina aponta para o seguinte endere&ccedil;o';
    $t['link_url_desc'] = 'Pode ser deixado em branco';
    $t['separate_window'] = 'Abrir em uma nova guia';
    $t['pointer_page'] = 'Página de apontamento';
    $t['points_to_another_page'] = 'Aponta para outra p&aacute;gina';
    $t['points_to'] = 'Aponta para';
    $t['redirects'] = 'Redireciona';
    $t['masquerades'] = 'M&aacute;scara';
    $t['strict_matching'] = 'Marcar como selecionado no menu para todas as p&aacute;ginas abaixo deste link';
    $t['up'] = 'Mover para cima';
    $t['down'] = 'Mover para baixo';
    $t['remove_template_completely'] = 'Exclua todas as p&aacute;ginas e rascunhos deste modelo para remov&ecirc;-lo completamente';
    $t['remove_uncloned_template_completely'] = 'Exclua todos os rascunhos deste modelo para remov&ecirc;-lo completamente';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Enviar';
    $t['folder_empty'] = 'Esta pasta est&aacute vazia. Use o bot&atilde;o de envio acima para adicionar imagens.';
    $t['root'] = 'Pasta-raiz';
    $t['item'] = 'imagem'; // Single
    $t['items'] = 'imagens'; // Multiple
    $t['container'] = 'pasta'; // Single
    $t['containers'] = 'pastas'; // Multiple

    //
    $t['columns_missing'] = 'Algumas colunas estão faltando!';
    $t['confirm_delete_columns'] = 'Voc&circ; tem certeza de que deseja excluir as colunas que faltam definitivamente?';
    $t['add_row'] = 'Adicionar linha';

    // 2.0
    $t['left'] = 'Mover para a esquerda';
    $t['right'] = 'Mover para a direita';
    $t['crop'] = 'Cortar';
    $t['menu_templates'] = 'Modelos';
    $t['menu_modules'] = 'Gerenciamento';
    $t['cancel'] = 'Cancelar';
    $t['selected'] = 'Selecionado';
    $t['add'] = 'Adicionar';
    $t['remove'] = 'Remover';
    // 2.1
    $t['tiles_missing'] = 'Alguns blocos est&atilde;o faltando!';
    $t['confirm_delete_tiles'] = 'Voc&ecirc; tem certeza de que deseja excluir os blocos que faltam definitivamente?';
    $t['add_above'] = 'Adicionar acima';
    $t['confirm_delete_row'] = 'Apagar esta linha?';
    $t['no_data_message'] = '- Sem dados -';
    $t['ok'] = 'OK';
    $t['globals'] = 'Globais';
    $t['manage_globals'] = 'Gerenciar globais';
    $t['bulk_action_with_selected'] = 'Com os selecionados...';
    $t['month01'] = 'Janeiro';
    $t['month02'] = 'Fevereiro';
    $t['month03'] = 'Março';
    $t['month04'] = 'Abril';
    $t['month05'] = 'Maio';
    $t['month06'] = 'Junho';
    $t['month07'] = 'Julho';
    $t['month08'] = 'Agosto';
    $t['month09'] = 'Setembro';
    $t['month10'] = 'Outubro';
    $t['month11'] = 'Novembro';
    $t['month12'] = 'Dezembro';
    $t['manage'] = 'Gerenciar';
