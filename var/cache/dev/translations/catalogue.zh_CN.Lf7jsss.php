<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This value should be false.' => '该变量的值应为 false 。',
    'This value should be true.' => '该变量的值应为 true 。',
    'This value should be of type {{ type }}.' => '该变量的类型应为 {{ type }} 。',
    'This value should be blank.' => '该变量值应为空。',
    'The value you selected is not a valid choice.' => '选定变量的值不是有效的选项。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要选择 {{ limit }} 个选项。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能选择 {{ limit }} 个选项。',
    'One or more of the given values is invalid.' => '一个或者多个给定的值无效。',
    'This field was not expected.' => '此字段是多余的。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '该值不是一个有效的日期（date）。',
    'This value is not a valid datetime.' => '该值不是一个有效的日期时间（datetime）。',
    'This value is not a valid email address.' => '该值不是一个有效的邮件地址。',
    'The file could not be found.' => '文件未找到。',
    'The file is not readable.' => '文件不可读。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大 ({{ size }} {{ suffix }})。文件大小不可以超过 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '无效的文件类型 ({{ type }}) 。允许的文件类型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '这个变量的值应该小于或等于 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字符串太长，长度不可超过 {{ limit }} 个字符。',
    'This value should be {{ limit }} or more.' => '该变量的值应该大于或等于 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字符串太短，长度不可少于 {{ limit }} 个字符。',
    'This value should not be blank.' => '该变量不应为空。',
    'This value should not be null.' => '该变量不应为 null 。',
    'This value should be null.' => '该变量应为空 null 。',
    'This value is not valid.' => '该变量值无效 。',
    'This value is not a valid time.' => '该值不是一个有效的时间。',
    'This value is not a valid URL.' => '该值不是一个有效的 URL 。',
    'The two values should be equal.' => '这两个变量的值应该相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大，文件大小不可以超过 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '文件太大。',
    'The file could not be uploaded.' => '无法上传此文件。',
    'This value should be a valid number.' => '该值应该为有效的数字。',
    'This value is not a valid country.' => '该值不是有效的国家名。',
    'This file is not a valid image.' => '该文件不是有效的图片。',
    'This is not a valid IP address.' => '该值不是有效的IP地址。',
    'This value is not a valid language.' => '该值不是有效的语言名。',
    'This value is not a valid locale.' => '该值不是有效的区域值（locale）。',
    'This value is already used.' => '该值已经被使用。',
    'The size of the image could not be detected.' => '不能解析图片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '图片太宽 ({{ width }}px)，最大宽度为 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '图片宽度不够 ({{ width }}px)，最小宽度为 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '图片太高 ({{ height }}px)，最大高度为 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '图片高度不够 ({{ height }}px)，最小高度为 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '该变量的值应为用户当前的密码。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '该变量应为 {{ limit }} 个字符。',
    'The file was only partially uploaded.' => '该文件的上传不完整。',
    'No file was uploaded.' => '没有上传任何文件。',
    'No temporary folder was configured in php.ini.' => 'php.ini 里没有配置临时文件目录。',
    'Cannot write temporary file to disk.' => '临时文件写入磁盘失败。',
    'A PHP extension caused the upload to fail.' => '某个 PHP 扩展造成上传失败。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '该集合最少应包含 {{ limit }} 个元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '该集合最多包含 {{ limit }} 个元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '该集合应包含 {{ limit }} 个元素 element 。',
    'Invalid card number.' => '无效的信用卡号。',
    'Unsupported card type or invalid card number.' => '不支持的信用卡类型或无效的信用卡号。',
    'This is not a valid International Bank Account Number (IBAN).' => '该值不是有效的国际银行帐号（IBAN）。',
    'This value is not a valid ISBN-10.' => '该值不是有效的10位国际标准书号（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '该值不是有效的13位国际标准书号（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '该值不是有效的国际标准书号（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '该值不是有效的国际标准期刊号（ISSN）。',
    'This value is not a valid currency.' => '该值不是有效的货币名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '该值应等于 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '该值应大于 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '该值应大于或等于 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '该值应小于 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '该值应小于或等于 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '该值不应先等于 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值不应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '图片宽高比太大 ({{ ratio }})。允许的最大宽高比为 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '图片宽高比太小 ({{ ratio }})。允许的最大宽高比为 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '图片是方形的 ({{ width }}x{{ height }}px)。不允许使用方形的图片。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '图片是横向的 ({{ width }}x{{ height }}px)。不允许使用横向的图片。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '图片是纵向的 ({{ width }}x{{ height }}px)。不允许使用纵向的图片。',
    'An empty file is not allowed.' => '不允许使用空文件。',
    'The host could not be resolved.' => '主机名无法解析。',
    'This value does not match the expected {{ charset }} charset.' => '该值不符合 {{ charset }} 编码。',
    'Error' => '错误',
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
    'fos_user.username.already_used' => '用户名已存在',
    'fos_user.username.blank' => '请输入用户名',
    'fos_user.username.short' => '用户名字数不够',
    'fos_user.username.long' => '用户名字数超出限制',
    'fos_user.email.already_used' => '邮箱已被使用',
    'fos_user.email.blank' => '请输入邮箱',
    'fos_user.email.short' => '邮箱字数不够',
    'fos_user.email.long' => '邮箱字数超出限制',
    'fos_user.email.invalid' => '邮箱格式不正确',
    'fos_user.password.blank' => '请输入密码',
    'fos_user.password.short' => '密码字数不够',
    'fos_user.password.mismatch' => '两次输入密码不一致',
    'fos_user.new_password.blank' => '请输入新密码',
    'fos_user.new_password.short' => '新密码字数不够',
    'fos_user.current_password.invalid' => '密码格式不正确',
    'fos_user.group.blank' => '请输入小组名称',
    'fos_user.group.short' => '小组名称字数不够',
    'fos_user.group.long' => '小组名称字数超出限制',
    'fos_group.name.already_used' => '此名称已在使用',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => '更新小组',
    'group.show.name' => '小组名称',
    'group.new.submit' => '创建小组',
    'group.flash.updated' => '小组已被更新',
    'group.flash.created' => '小组已创建',
    'group.flash.deleted' => '小组已被删除',
    'security.login.username' => '用户名或邮箱',
    'security.login.password' => '密码',
    'security.login.remember_me' => '自动登录',
    'security.login.submit' => '登录',
    'profile.show.username' => '用户名',
    'profile.show.email' => '电子邮箱',
    'profile.edit.submit' => '更新',
    'profile.flash.updated' => '用户信息已更新',
    'change_password.submit' => '修改密码',
    'change_password.flash.success' => '密码已成功修改',
    'registration.check_email' => '系统向%email%发送了一封包含激活链接的邮件，请访问该链接以启用你的帐户。',
    'registration.confirmed' => '%username%，恭喜你，你的帐户已启用！',
    'registration.back' => '返回前一页面',
    'registration.submit' => '注册',
    'registration.flash.user_created' => '用户已创建',
    'registration.email.subject' => '%username%，欢迎你',
    'registration.email.message' => '%username%，你好！

要启用你的用户帐号，请访问：%confirmationUrl%

祝好
网站团队
',
    'resetting.request.username' => '用户名或邮箱',
    'resetting.request.submit' => '重置密码',
    'resetting.reset.submit' => '修改密码',
    'resetting.flash.success' => '密码已重置。',
    'resetting.email.subject' => '重置密码',
    'resetting.email.message' => '%username%，你好！

请访问 %confirmationUrl% 以重置你的帐户密码。

祝好
网站团队
',
    'layout.logout' => '退出',
    'layout.login' => '登录',
    'layout.register' => '注册',
    'layout.logged_in_as' => '已登录为：%username%',
    'form.group_name' => '小组名称',
    'form.username' => '用户名',
    'form.email' => '电子邮箱',
    'form.current_password' => '当前密码',
    'form.password' => '密码',
    'form.password_confirmation' => '确认密码',
    'form.new_password' => '新密码',
    'form.new_password_confirmation' => '确认新密码',
  ),
  'ums' => 
  array (
    'base.title' => '用户管理系统',
    'base.loader' => '请稍等...',
    'login_page.title' => '登录到您的账户',
    'login_page.forgot_password' => '忘记密码？',
    'login_page.have_not_account' => '还没有账户？',
    'login_page.register' => '注册',
    'registration_page.title' => '注册一个账户',
    'registration_page.firstname' => '名字',
    'registration_page.lastname' => '姓氏 *',
    'registration_page.username' => '用户名昵称 *',
    'registration_page.email' => '邮箱 *',
    'registration_page.password' => '密码 *',
    'registration_page.date_birth' => '出生日期',
    'registration_page.sex.title' => '性别 *',
    'registration_page.sex.m' => '男',
    'registration_page.sex.f' => '女',
    'registration_page.id_card' => '身份证号码 *',
    'registration_page.phone' => '电话号码 *',
    'registration_page.wechat' => '微信号',
    'registration_page.region' => '省市 *',
    'registration_page.address' => '具体地址',
    'registration_page.btn' => '注册',
    'registration_page.have_an_account' => '已经有账户了？',
    'registration_page.login' => '登录',
    'registration_page.check_email' => '系统向 %email% 发送了一封包含激活链接的邮件，请访问该链接以启用你的帐户。',
    'registration_page.confirm.title' => '%username%，恭喜你，你的帐户已启用！',
    'registration_page.confirm.msg' => '请登录',
    'registration_page.email_to_send.message1' => '%username%，你好！',
    'registration_page.email_to_send.message2' => '要启用你的用户帐号，请访问：%confirmationUrl%',
    'registration_page.email_to_send.message3' => '祝好',
    'registration_page.email_to_send.message4' => '网站团队',
    'resetting.reset' => '重置你的密码',
    'resetting.msg' => '请输入你注册的用户名或者邮箱，然后请跟随系统给你邮箱发送的邮件中指令完成密码的重置。',
    'resetting.got_psw' => '想起密码了？',
    'resetting.login' => '登录',
    'resetting.check_email' => '系统向已经向你注册的邮箱发送了一封包含密码重置链接的邮件，请查收。',
    'sidebar.menu.welcome' => '您好',
    'sidebar.menu.profile' => '个人信息',
    'sidebar.menu.logout' => '登出',
    'sidebar.menu.admin' => '管理员',
    'sidebar.menu.index' => '首页',
    'sidebar.menu.buy_histo' => '购买记录',
    'sidebar.menu.product_info' => '产品信息',
    'sidebar.menu.product_source' => '产品溯源',
    'sidebar.admin.users' => '会员信息',
    'sidebar.admin.sellers' => '销售员信息',
    'sidebar.admin.admins' => '管理员信息',
    'sidebar.admin.products' => '产品信息',
    'sidebar.setting.skins' => '切换皮肤',
    'sidebar.setting.purple' => '紫色',
    'sidebar.setting.blue' => '蓝色',
    'sidebar.setting.cyan' => '青色',
    'sidebar.setting.green' => '绿色',
    'sidebar.setting.orange' => '橙色',
    'sidebar.setting.blush' => '腮红色',
    'purchase_page.purchase_id' => '购买记录号',
    'purchase_page.activity' => '选项',
    'purchase_page.user_id' => '用户名',
    'purchase_page.product_id' => '商品编号',
    'purchase_page.date_purchase' => '购买时间',
    'purchase_page.purchase_tracking_id' => '溯源号',
    'purchase_page.quantity' => '数量',
    'purchase_page.title' => '输入购买记录',
    'purchase_page.btn' => '保存',
    'purchase_page.return' => '返回',
    'purchase_page.index.add_row' => '添加',
    'profile_page.title' => '个人信息',
    'profile_page.action.edit' => '更新个人信息',
    'profile_page.action.changepwd' => '更新登录密码',
    'product_page.page_title' => '产品信息',
    'product_page.product_id' => '商品编号',
    'product_page.product_name' => '商品名',
    'product_page.barcode' => '条形码',
    'product_page.image_path' => '商品图片',
    'product_page.category' => '商品类别',
    'product_page.shelf_life' => '保质期',
    'product_page.promotion' => '促销情况',
    'product_page.stock' => '库存',
    'product_page.description' => '商品描述',
    'product_page.action' => '操作',
    'product_page.add_row' => '添加商品',
    'product_page.btn' => '保存',
    'product_page.return' => '返回',
    'product_page.title' => '请输入您的新产品',
    'product_page.edit_form' => '修改产品信息',
    'tracking_page.add_row' => '添加',
    'tracking_page.tracking_id' => '溯源号',
    'tracking_page.product_id' => '产品名',
    'tracking_page.production_date' => '生产日期',
    'tracking_page.batch_id' => '批次',
    'tracking_page.starting_time' => '开始生产时间',
    'tracking_page.ranch_id' => '牧场',
    'tracking_page.milk_collection_time' => '奶源收集时间',
    'tracking_page.ranch_responsible' => '牧场负责人',
    'tracking_page.factory' => '工厂',
    'tracking_page.factory_processing_time' => '工厂加工时间',
    'tracking_page.factory_responsible' => '工厂负责人',
    'tracking_page.factory_delivery_time' => '工厂出厂时间',
    'tracking_page.factory_delivery_responsible' => '出厂负责人',
    'tracking_page.export_time' => '出关时间',
    'tracking_page.export_responsible' => '出关负责人',
    'tracking_page.import_time' => '入关时间',
    'tracking_page.import_responsible' => '入关负责人',
    'tracking_page.center_arrival_time' => '到达总部时间',
    'tracking_page.arrival_responsible' => '总部收货负责人',
    'tracking_page.site_1' => '站点1',
    'tracking_page.site_1_delivery_time' => '站点1配送时间',
    'tracking_page.site_1_responsible' => '站点1配送负责人',
    'tracking_page.site_2' => '站点2',
    'tracking_page.site_2_delivery_time' => '站点2配送时间',
    'tracking_page.site_2_responsible' => '站点2配送负责人',
    'tracking_page.site_3' => '站点3',
    'tracking_page.site_3_delivery_time' => '站点3配送时间',
    'tracking_page.site_3_responsible' => '站点3配送负责人',
    'tracking_page.client_id' => '会员号',
    'tracking_page.purchase_time' => '购买时间',
    'tracking_page.seller_id' => '销售员号',
    'tracking_page.title' => '输入溯源信息',
    'tracking_page.btn' => '保存',
    'tracking_page.return' => '返回',
    'tracking_page.page_title' => '产品溯源信息',
    'tracking_page.phrase_1' => '开始生产了！！！',
    'tracking_page.phrase_2.1' => '我们正在',
    'tracking_page.phrase_2.2' => '收集奶源',
    'tracking_page.phrase_2.3' => '牧场负责人：',
    'tracking_page.phrase_3.1' => '牛奶正在',
    'tracking_page.phrase_3.2' => '进行脱水干燥处理',
    'tracking_page.phrase_3.3' => '奶粉研制专家：',
    'tracking_page.phrase_4.1' => '奶粉已经装瓶完成，开始运往中国',
    'tracking_page.phrase_4.2' => '澳洲区运输负责人：',
    'tracking_page.phrase_5.1' => '产品已经出关了',
    'tracking_page.phrase_5.2' => '产品出关负责人：',
    'tracking_page.phrase_6.1' => '产品正在入关',
    'tracking_page.phrase_6.2' => '清关负责人：',
    'tracking_page.phrase_7.1' => '产品送达海口总部',
    'tracking_page.phrase_7.2' => '总部负责人：',
    'tracking_page.phrase_8.1' => '产品发往',
    'tracking_page.phrase_8.2' => '销售员：',
    'tracking_page.phrase_9.1' => '产品发往',
    'tracking_page.phrase_9.2' => '销售员：',
    'tracking_page.phrase_10.1' => '产品发往',
    'tracking_page.phrase_10.2' => '销售员：',
    'tracking_page.phrase_11.1' => '奶粉现在就在你手里',
    'tracking_page.phrase_11.2' => '销售员：',
    'userList_pages.title_users' => '会员信息',
    'userList_pages.title_sellers' => '销售人员信息',
    'userList_pages.title_admins' => '管理人员信息',
    'userList_pages.add_seller' => '添加销售人员',
    'userList_pages.add_admin' => '添加管理人员',
    'userList_pages.add_seller_admin' => '添加销售/管理人员',
    'userList_pages.action' => '选项',
    'userList_pages.edit_form' => '修改用户信息',
    'user_infos.username' => '用户名',
    'user_infos.name' => '真实姓名',
    'user_infos.firstname' => '名字',
    'user_infos.lastname' => '姓氏',
    'user_infos.user_id' => '会员号',
    'user_infos.employee_id' => '工号',
    'user_infos.sex.title' => '性别',
    'user_infos.sex.1' => '男',
    'user_infos.sex.0' => '女',
    'user_infos.email' => '邮箱',
    'user_infos.phone' => '电话',
    'user_infos.date_birth' => '出生日期',
    'user_infos.id_card' => '身份证号',
    'user_infos.wechat' => '微信号',
    'user_infos.address' => '地址',
    'user_infos.region' => '所属地区',
    'user_infos.responsible_id' => '负责人工号',
    'user_infos.responsible_region' => '负责地区',
    'user_infos.plain_pwd' => '密码',
    'user_infos.enabled.title' => '账户状态',
    'user_infos.enabled.1' => '激活',
    'user_infos.enabled.0' => '未激活',
    'user_infos.roles.title' => '权限',
    'user_infos.roles.ROLE_USER' => '会员',
    'user_infos.roles.ROLE_SELLER' => '销售人员',
    'user_infos.roles.ROLE_ADMIN' => '管理人员',
    'user_infos.roles.ROLE_SUPER_ADMIN' => '超级管理员',
    'user_infos.date_register' => '注册日期',
    'user_infos.btn.submit' => '提交',
    'user_infos.btn.cancel' => '取消',
    'region.title' => '负责地区',
    'region.nah' => '请选择(可多选)',
    'region.beijing' => '北京市',
    'region.shanghai' => '上海市',
    'region.tianjin' => '天津市',
    'region.jiangsu' => '江苏省',
    'region.hainan' => '海南省',
    'region.taiwan' => '台湾省',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);

return $catalogue;
