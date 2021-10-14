<?php
namespace Youtech;

interface Routes {
	public function getRoutes(): array;
	public function getAuthentication(): \Youtech\Authentication;
	public function checkPermission($permission): bool;
}