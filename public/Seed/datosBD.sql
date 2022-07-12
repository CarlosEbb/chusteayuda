INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Usuario tipo administrador', '2021-04-03 22:00:00', '2021-04-03 22:00:00'),
(2, 'Cliente', 'Usuario tipo cliente', '2021-04-03 22:00:00', '2021-04-03 22:00:00');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol_id`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Admin', 'admin@admin.com', NULL, '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', 1, NULL, '2021-03-31 22:00:00', '2021-03-31 22:00:00');

INSERT INTO `tipo_reporte` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Evaluación del Desarrollo', NULL, NULL, NULL);