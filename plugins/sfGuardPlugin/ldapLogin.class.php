<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LdapLogin {
 
	public static function checkPassword($user,$pass){ echo entra; die;
		$ldapUser = "uid=".$user.",".sfConfig::get('sf_ldap_suffix');		
 
		$ds = ldap_connect(sfConfig::get('sf_ldap_hostname'),10389);
		ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
		return @ldap_bind($ds, $ldapUser, $pass); //BIND
	}
 
	public static function createUser($user,$pass){
		if(sfConfig::get('sf_ldap_admin') == ""){
			$settings = sfYaml::load(sfConfig::get('sf_root_dir')."/config/settings.yml");
			$admin = $settings['all']['ldap']['admin'];
			$adminPass = $settings['all']['ldap']['password'];
			$host = $settings['all']['ldap']['hostname'];
		}else{
			$admin = sfConfig::get('sf_ldap_admin');
			$adminPass = sfConfig::get('sf_ldap_password');
			$host = sfConfig::get('sf_ldap_hostname');
		}
 
		$ds = ldap_connect($host,10389);
		if(!$ds) throw new Exception('Cant connect to LDAP host "'.$host.'"');
		ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
 
		if(!ldap_bind($ds, $admin,  $adminPass)) throw new Exception('Cant bind to LDAP host "'.$host.'"');
		$info["sn"]= $user;
		$info["uid"]= $user;
		$info["cn"]= $user;
		$info["userPassword"] = "{SHA}". base64_encode(sha1($pass,true));
    	$info["objectclass"][]="person";
    	$info["objectclass"][]="inetOrgPerson";
    	$info["objectclass"][]="top";
    	$info["objectclass"][]="organizationalPerson";
		return ldap_add($ds, "uid=".$user.", ".sfConfig::get('sf_ldap_suffix'), $info);
	}
 
	public static function removeUser($user){
		if(sfConfig::get('sf_ldap_admin') == ""){
			$settings = sfYaml::load(sfConfig::get('sf_root_dir')."/config/settings.yml");
			$admin = $settings['all']['ldap']['admin'];
			$adminPass = $settings['all']['ldap']['password'];
			$host = $settings['all']['ldap']['hostname'];
		}else{
			$admin = sfConfig::get('sf_ldap_admin');
			$adminPass = sfConfig::get('sf_ldap_password');
			$host = sfConfig::get('sf_ldap_hostname');
		}
 
		$ds = ldap_connect($host,10389);
		if(!$ds) throw new Exception('Cant connect to LDAP host "'.$host.'"');
		ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
 
		if(!ldap_bind($ds, $admin,  $adminPass)) throw new Exception('Cant bind to LDAP host "'.$host.'"');
		return ldap_delete($ds, "uid=".$user.", ".sfConfig::get('sf_ldap_suffix'));
	}
 
	/*public static function updatePassword($user,$pass){
		if(sfConfig::get('sf_ldap_admin') == ""){
			$settings = sfYaml::load(sfConfig::get('sf_root_dir')."/config/settings.yml");
			$admin = $settings['all']['ldap']['admin'];
			$adminPass = $settings['all']['ldap']['password'];
			$host = $settings['all']['ldap']['hostname'];
		}else{
			$admin = sfConfig::get('sf_ldap_admin');
			$adminPass = sfConfig::get('sf_ldap_password');
			$host = sfConfig::get('sf_ldap_hostname');
		}
 
		$ds = ldap_connect($host,10389);
		if(!$ds) throw new Exception('Cant connect to LDAP host "'.$host.'"');
		ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
 
		if(!ldap_bind($ds, $admin,  $adminPass)) throw new Exception('Cant bind to LDAP host "'.$host.'"');
 
		$pass = array("userPassword" =&gt; "{SHA}". base64_encode(sha1($pass,true)));
		return ldap_modify ($ds, "uid=".$user.", ".sfConfig::get('sf_ldap_suffix'), $pass);
 
	} */
 
}
?>
