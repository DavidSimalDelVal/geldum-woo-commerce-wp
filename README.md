# GeldumWP
A WooCommerce extension for accepting Geldum

## Dependencies
This plugin is rather simple but there are a few things that need to be set up beforehand.

* A web server! Ideally with the most recent versions of PHP and mysql

* A Geldum wallet. You can find the official wallet [here](https://getgeldum.org/downloads/)

* [WordPress](https://wordpress.org)
WordPress is the backend tool that is needed to use WooCommerce and this Geldum plugin

* [WooCommerce](https://woocommerce.com)
This Geldum plugin is an extension of WooCommerce, which works with WordPress

* [BCMath](http://php.net/manual/en/book.bc.php)
A PHP extension used for arbitrary precision maths

## Step 1: Activating the plugin
* Downloading: First of all, you will need to download the plugin. You can download the latest release as a .zip file from https://github.com/geldum-integrations/geldumwp/releases If you wish, you can also download the latest source code from GitHub. This can be done with the command `git clone https://github.com/geldum-integrations/geldumwp.git` or can be downloaded as a zip file from the GitHub web page.

* Unzip the file geldumwp_release.zip if you downloaded the zip from the releases page [here](https://github.com/geldum-integrations/geldumwp/releases).

* Put the plugin in the correct directory: You will need to put the folder named `geldum` from this repo/unzipped release into the WordPress plugins directory. This can be found at `path/to/wordpress/folder/wp-content/plugins`

* Activate the plugin from the WordPress admin panel: Once you login to the admin panel in WordPress, click on "Installed Plugins" under "Plugins". Then simply click "Activate" where it says "Geldum - WooCommerce Gateway"

## Step 2 Option 1: Use your wallet address and viewkey

* Get your Geldum wallet address starting with '4'
* Get your wallet secret viewkey from your wallet

A note on privacy: When you validate transactions with your private viewkey, your viewkey is sent to (but not stored on) xmrchain.net over HTTPS. This could potentially allow an attacker to see your incoming, but not outgoing, transactions if he were to get his hands on your viewkey. Even if this were to happen, your funds would still be safe and it would be impossible for somebody to steal your money. For maximum privacy use your own geldum-wallet-rpc instance.

## Step 2 Option 2: Get a Geldum daemon to connect to

### Option 1: Running a full node yourself

To do this: start the Geldum daemon on your server and leave it running in the background. This can be accomplished by running `./geldumd` inside your Geldum downloads folder. The first time that you start your node, the Geldum daemon will download and sync the entire Geldum blockchain. This can take several hours and is best done on a machine with at least 4GB of ram, an SSD hard drive (with at least 40GB of free space), and a high speed internet connection.

### Option 2: Connecting to a remote node
The easiest way to find a remote node to connect to is to visit [geldumworld.com](https://geldumworld.com/#nodes) and use one of the nodes offered. It is probably easiest to use node.geldumworld.com:18089 which will automatically connect you to a random node.

### Setup your Geldum wallet-rpc

* Setup a Geldum wallet using the geldum-wallet-cli tool. If you do not know how to do this you can learn about it at [getgeldum.org](https://getgeldum.org/resources/user-guides/geldum-wallet-cli.html)

* [Create a view-only wallet from that wallet for security.](https://geldum.stackexchange.com/questions/3178/how-to-create-a-view-only-wallet-for-the-gui/4582#4582)

* Start the Wallet RPC and leave it running in the background. This can be accomplished by running `./geldum-wallet-rpc --rpc-bind-port 21936 --disable-rpc-login --log-level 2 --wallet-file /path/viewOnlyWalletFile` where "/path/viewOnlyWalletFile" is the wallet file for your view-only wallet. If you wish to use a remote node you can add the `--daemon-address` flag followed by the address of the node. `--daemon-address node.geldumworld.com:21936` for example.

## Step 4: Setup geldum Gateway in WooCommerce

* Navigate to the "settings" panel in the WooCommerce widget in the WordPress admin panel.

* Click on "Checkout"

* Select "Geldum GateWay"

* Check the box labeled "Enable this payment gateway"

* Check either "Use ViewKey" or "Use geldum-wallet-rpc"

If You chose to use viewkey:

* Enter your Geldum wallet address in the box labeled "Geldum Address". If you do not know your address, you can run the `address` command in your Geldum wallet

* Enter your secret viewkey in the box labeled "ViewKey"

If you chose to use geldum-wallet-rpc:

* Enter your Geldum wallet address in the box labeled "Geldum Address". If you do not know your address, you can run the `address` command in your Geldum wallet

* Enter the IP address of your server in the box labeled "Geldum wallet RPC Host/IP"

* Enter the port number of the Wallet RPC in the box labeled "Geldum wallet RPC port" (will be `21936` if you used the above example).

Finally:

* Click on "Save changes"

## Donating to the Devs :)
XMR Address : `44krVcL6TPkANjpFwS2GWvg1kJhTrN7y9heVeQiDJ3rP8iGbCd5GeA4f3c2NKYHC1R4mCgnW7dsUUUae2m9GiNBGT4T8s2X`
