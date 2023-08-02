INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Usuario tipo administrador', '2021-04-03 22:00:00', '2021-04-03 22:00:00');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 'admin', 'admin@admin.com', NULL, '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', '1', NULL, '2022-07-20 20:51:02', '2022-07-20 20:51:02');

INSERT INTO `materiales` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `created_at`, `updated_at`) VALUES (NULL, 'Trazos', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '/uploads/materiales/trazos.png', '/uploads/archivos/Trazos.pdf', NULL, NULL), (NULL, 'Colores', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '/uploads/materiales/colores.png', '/uploads/archivos/Colores.pdf', NULL, NULL);

--ALTER TABLE materiales DROP COLUMN imagen;