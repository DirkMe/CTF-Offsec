{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

		{if !$content_only}
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					{$HOOK_RIGHT_COLUMN}
				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				{$HOOK_FOOTER}

				<ul id="custom_footer_links">
					<li>
					<a href="{$link->getModuleLink('ndk_steppingpack','quote', ['product_id'=>1])}">
						Order Status / Suche
					</a>
					</li>
					<li>
					<a href="{$base_dir}modules/orderfiles/ajax/upload.php">
						Datei-Upload
					</a>
					</li>
				</ul>
				{if $PS_ALLOW_MOBILE_DEVICE}
					<p class="center clearBoth"><a href="{$link->getPageLink('index', true)}?mobile_theme_ok">{l s='Browse the mobile site'}</a></p>
				{/if}
			</div>
		</div>
	{/if}
	</body>
</html>
