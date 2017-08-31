<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class PagesController extends Controller
{
    public function __construct()
	{
		$paths = [];

		foreach ( Route::getRoutes() as $route )
		{
			if ( $route->methods[0] !== 'GET' ) continue;

			$path = $route->uri();

			$paths[$path] = $path === '/' ? 'Home' : ucfirst($path);
		}

		$paths = array_unique( $paths );

		view()->share('nav_links', $paths);
	}

	/**
	 * @return $this
	 */
	public function index()
	{
		return view('pages.index')
			->with('title', 'About us');
	}

	/**
	 * @return $this
	 */
	public function consulting()
	{
		return view('pages.consulting')
			->with('title', 'Consulting');
	}

	/**
	 * @return $this
	 */
	public function training()
	{
		return view('pages.training')
			->with('title', 'Training');
	}

	/**
	 * @return $this
	 */
	public function contact()
	{
		return view('pages.contact')
			->with('title', 'Contact us');
	}

}
