<?php
namespace Fabriciorabelo\Modules\Repositories\Interfaces;

interface ModuleRepositoryInterface
{
	/**
	 * Get all modules.
	 *
	 * @return Collection
	 */
	public function all();

	/**
	 * Get all module slugs.
	 *
	 * @return Collection
	 */
	public function slugs();

	/**
	 * Get modules based on where clause.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 * @return Collection
	 */
	public function where($key, $value);

	/**
	 * Sort modules by given key in ascending order.
	 *
	 * @param  string  $key
	 * @return Collection
	 */
	public function sortBy($key);

	/**
	 * Sort modules by given key in ascending order.
	 *
	 * @param  string  $key
	 * @return Collection
	 */
	public function sortByDesc($key);

	/**
	 * Determines if the given module exists.
	 *
	 * @param  string  $slug
	 * @return bool
	 */
	public function exists($slug);

	/**
	 * Returns a count of all modules.
	 *
	 * @return int
	 */
	public function count();

	/**
	 * Returns the modules defined properties.
	 *
	 * @param  string  $slug
	 * @return Collection
	 */
	public function getProperties($slug);

	/**
	 * Returns the given module property.
	 *
	 * @param  string       $property
	 * @param  mixed|null   $default
	 * @return mixed|null
	 */
	public function getProperty($property, $default = null);

	/**
	 * Set the given module property value.
	 *
	 * @param  string  $property
	 * @param  mixed   $value
	 * @return bool
	 */
	public function setProperty($property, $value);

	/**
	 * Get all enabled modules.
	 *
	 * @return Collection
	 */
	public function enabled();

	/**
	 * Get all disabled modules.
	 *
	 * @return Collection
	 */
	public function disabled();

	/**
	 * Determines if the specified module is enabled.
	 *
	 * @param  string  $slug
	 * @return bool
	 */
	public function isEnabled($slug);

	/**
	* Determines if the specified module is disabled.
	*
	* @param  string  $slug
	* @return bool
	*/
	public function isDisabled($slug);

	/**
	 * Enables the specified module.
	 *
	 * @param  string  $slug
	 * @return bool
	 */
	public function enable($slug);

	/**
	* Disables the specified module.
	*
	* @param  string  $slug
	* @return bool
	*/
	public function disable($slug);
}
