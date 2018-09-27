=== Geldum WooCommerce Extension ===
Contributors: serhack
Donate link: http://geldumintegrations.com/donate.html
Tags: geldum, woocommerce, integration, payment, merchant, cryptocurrency, accept geldum, geldum woocommerce
Requires at least: 4.0
Tested up to: 4.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Geldum WooCommerce Extension is a Wordpress plugin that allows to accept bitcoins at WooCommerce-powered online stores.

== Description ==

An extension to WooCommerce for accepting Geldum as payment in your store.

= Benefits =

* Accept payment directly into your personal Geldum wallet.
* Accept payment in geldum for physical and digital downloadable products.
* Add geldum payments option to your existing online store with alternative main currency.
* Flexible exchange rate calculations fully managed via administrative settings.
* Zero fees and no commissions for geldum payments processing from any third party.
* Automatic conversion to Geldum via real time exchange rate feed and calculations.
* Ability to set exchange rate calculation multiplier to compensate for any possible losses due to bank conversions and funds transfer fees.

== Installation ==

1. Install "Geldum WooCommerce extension" WordPress plugin just like any other WordPress plugin.
2. Activate
3. Setup your geldum-wallet-rpc with a view-only wallet
4. Add your geldum-wallet-rpc host address and Geldum address in the settings panel
5. Click “Enable this payment gateway”
6. Enjoy it!

== Remove plugin ==

1. Deactivate plugin through the 'Plugins' menu in WordPress
2. Delete plugin through the 'Plugins' menu in WordPress

== Screenshots == 
1. Geldum Payment Box
2. Geldum Options

== Changelog ==

= 0.1 =
* First version ! Yay!

= 0.2 =
* Bug fixes

== Upgrade Notice ==

soon

== Frequently Asked Questions ==

* What is Geldum ?
Geldum is completely private, cryptographically secure, digital cash used across the globe. See https://getgeldum.org for more information

* What is a Geldum wallet?
A Geldum wallet is a piece of software that allows you to store your funds and interact with the Geldum network. You can get a Geldum wallet from https://getgeldum.org/downloads

* What is geldum-wallet-rpc ?
The geldum-wallet-rpc is an RPC server that will allow this plugin to communicate with the geldum network. You can download it from https://getgeldum.org/downloads with the command-line tools.

* Why do I see `[ERROR] Failed to connect to geldum-wallet-rpc at localhost port 21936
Syntax error: Invalid response data structure: Request id: 1 is different from Response id: ` ?
This is most likely because this plugin can not reach your geldum-wallet-rpc. Make sure that you have supplied the correct host IP and port to the plugin in their fields. If your geldum-wallet-rpc is on a different server than your wordpress site, make sure that the appropriate port is open with port forwarding enabled.
