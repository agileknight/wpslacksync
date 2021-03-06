<?php

/**
 * Description of CURL
 *
 * @author thambaru.com
 */
class Curl {

    private $ch, $set_opt = array();

    function __construct() {
        $this->ch = curl_init();
    }

    /*
     * 
     * $value should be a boolean for the following values.
     * 
     */

    function autoReferer($value = TRUE) {
        $this->set_opt[CURLOPT_AUTOREFERER] = $value;
        return $this;
    }

    function binaryTransfer($value = TRUE) {
        $this->set_opt[CURLOPT_BINARYTRANSFER] = $value;
        return $this;
    }

    function cookieSession($value = TRUE) {
        $this->set_opt[CURLOPT_COOKIESESSION] = $value;
        return $this;
    }

    function certInfo($value = TRUE) {
        $this->set_opt[CURLOPT_CERTINFO] = $value;
        return $this;
    }

    function connectOnly($value = TRUE) {
        $this->set_opt[CURLOPT_CONNECT_ONLY] = $value;
        return $this;
    }

    function crlf($value = TRUE) {
        $this->set_opt[CURLOPT_crlf] = $value;
        return $this;
    }

    function dnsUseGlobalCache($value = TRUE) {
        $this->set_opt[CURLOPT_DNS_USE_GLOBAL_CACHE] = $value;
        return $this;
    }

    function failOnError($value = TRUE) {
        $this->set_opt[CURLOPT_FAILONERROR] = $value;
        return $this;
    }

    function fileTime($value = TRUE) {
        $this->set_opt[CURLOPT_FILETIME] = $value;
        return $this;
    }

    function followLocation($value = TRUE) {
        $this->set_opt[CURLOPT_FOLLOWLOCATION] = $value;
        return $this;
    }

    function forbidReuse($value = TRUE) {
        $this->set_opt[CURLOPT_FORBID_REUSE] = $value;
        return $this;
    }

    function freshConnect($value = TRUE) {
        $this->set_opt[CURLOPT_FRESH_CONNECT] = $value;
        return $this;
    }

    function ftpUseEprt($value = TRUE) {
        $this->set_opt[CURLOPT_FTP_USE_EPRT] = $value;
        return $this;
    }

    function ftpUseEpsv($value = TRUE) {
        $this->set_opt[CURLOPT_FTP_USE_EPSV] = $value;
        return $this;
    }

    function ftpCreateMissingDirs($value = TRUE) {
        $this->set_opt[CURLOPT_FTP_CREATE_MISSING_DIRS] = $value;
        return $this;
    }

    function ftpAppend($value = TRUE) {
        $this->set_opt[CURLOPT_FTPAPPEND] = $value;
        return $this;
    }

    function tcpNodelay($value = TRUE) {
        $this->set_opt[CURLOPT_TCP_NODELAY] = $value;
        return $this;
    }

    function ftpascii($value = TRUE) {
        $this->set_opt[CURLOPT_FTPASCII] = $value;
        return $this;
    }

    function ftpListOnly($value = TRUE) {
        $this->set_opt[CURLOPT_FTPLISTONLY] = $value;
        return $this;
    }

    function header($value = TRUE) {
        $this->set_opt[CURLOPT_HEADER] = $value;
        return $this;
    }

    function headerOut($value = TRUE) {
        $this->set_opt[CURLOPT_HEADER_OUT] = $value;
        return $this;
    }

    function httpGet($value = TRUE) {
        $this->set_opt[CURLOPT_HTTPGET] = $value;
        return $this;
    }

    function httpProxyTunnel($value = TRUE) {
        $this->set_opt[CURLOPT_HTTPPROXYTUNNEL] = $value;
        return $this;
    }

    function netrc($value = TRUE) {
        $this->set_opt[CURLOPT_NETRC] = $value;
        return $this;
    }

    function nobody($value = TRUE) {
        $this->set_opt[CURLOPT_NOBODY] = $value;
        return $this;
    }

    function noProgress($value = TRUE) {
        $this->set_opt[CURLOPT_NOPROGRESS] = $value;
        return $this;
    }

    function put($value = TRUE) {
        $this->set_opt[CURLOPT_PUT] = $value;
        return $this;
    }

    function post($value = TRUE) {
        $this->set_opt[CURLOPT_POST] = $value;
        return $this;
    }

    function mute($value = TRUE) {
        $this->returnTransfer($value);
    }

    function returnTransfer($value = TRUE) {
        $this->set_opt[CURLOPT_RETURNTRANSFER] = $value;
        return $this;
    }

    function noSignal($value = TRUE) {
        $this->set_opt[CURLOPT_NOSIGNAL] = $value;
        return $this;
    }

    function transferText($value = TRUE) {
        $this->set_opt[CURLOPT_TRANSFERTEXT] = $value;
        return $this;
    }

    function unrestrictedAuth($value = TRUE) {
        $this->set_opt[CURLOPT_UNRESTRICTED_AUTH] = $value;
        return $this;
    }

    function upload($value = TRUE) {
        $this->set_opt[CURLOPT_UPLOAD] = $value;
        return $this;
    }

    function verbose($value = TRUE) {
        $this->set_opt[CURLOPT_VERBOSE] = $value;
        return $this;
    }

    /*
     * 
     * $value should be an integer for the following values.
     * 
     */

    function bufferSize($value) {
        $this->set_opt[CURLOPT_BUFFERSIZE] = $value;
        return $this;
    }

    function connectTimeOut($value) {
        $this->set_opt[CURLOPT_CONNECTTIMEOUT] = $value;
        return $this;
    }

    function connectTimeOutMS($value) {
        $this->set_opt[CURLOPT_CONNECTTIMEOUT_MS] = $value;
        return $this;
    }

    function dnsCacheTimeout($value) {
        $this->set_opt[CURLOPT_DNS_CACHE_TIMEOUT] = $value;
        return $this;
    }

    function ftpSSLAuth($value) {
        $this->set_opt[CURLOPT_FTPSSLAUTH] = $value;
        return $this;
    }

    function httpVersion($value) {
        $this->set_opt[CURLOPT_HTTP_VERSION] = $value;
        return $this;
    }

    function httpAuth($value) {
        $this->set_opt[CURLOPT_HTTPAUTH] = 'CURLAUTH_' . $value;
        return $this;
    }

    function inFileSize($value) {
        $this->set_opt[CURLOPT_INFILESIZE] = $value;
        return $this;
    }

    function lowSpeedLimit($value) {
        $this->set_opt[CURLOPT_LOW_SPEED_LIMIT] = $value;
        return $this;
    }

    function lowSpeedTime($value) {
        $this->set_opt[CURLOPT_LOW_SPEED_TIME] = $value;
        return $this;
    }

    function maxConnects($value) {
        $this->set_opt[CURLOPT_MAXCONNECTS] = $value;
        return $this;
    }

    function maxRedirs($value) {
        $this->set_opt[CURLOPT_MAXREDIRS] = $value;
        return $this;
    }

    function port($value) {
        $this->set_opt[CURLOPT_PORT] = $value;
        return $this;
    }

    function protocols($value) {
        $this->set_opt[CURLOPT_PROTOCOLS] = 'CURLPROTO_' . $value;
        return $this;
    }

    function proxyAuth($value) {
        $this->set_opt[CURLOPT_PROXYAUTH] = 'CURLAUTH_' . $value;
        return $this;
    }

    function proxyPort($value) {
        $this->set_opt[CURLOPT_PROXYPORT] = $value;
        return $this;
    }

    function proxyType($value) {
        $this->set_opt[CURLOPT_PROXYTYPE] = 'CURLPROXY_' . $value;
        return $this;
    }

    function resumeFrom($value) {
        $this->set_opt[CURLOPT_RESUME_FROM] = $value;
        return $this;
    }

    function sslVerifyHost($value) {
        $this->set_opt[CURLOPT_SSL_VERIFYHOST] = $value;
        return $this;
    }

    function sslVersion($value) {
        $this->set_opt[CURLOPT_SSLVERSION] = 'CURL_SSLVERSION_' . $value;
        return $this;
    }

    function timeCondition($value = 'IFMODSINCE') {
        $this->set_opt[CURLOPT_TIMECONDITION] = 'CURL_TIMECOND_' . $value;
        return $this;
    }

    function timeOut($value) {
        $this->set_opt[CURLOPT_TIMEOUT] = $value;
        return $this;
    }

    function timeOutMS($value) {
        $this->set_opt[CURLOPT_TIMEOUT_MS] = $value;
        return $this;
    }

    function timeValue($value = 'CURL_TIMECOND_IFMODSINCE') {
        $this->set_opt[CURLOPT_TIMEVALUE] = $value;
        return $this;
    }

    function maxRecvSpeedLarge($value) {
        $this->set_opt[CURLOPT_MAX_RECV_SPEED_LARGE] = $value;
        return $this;
    }

    function maxSendSpeedLarge($value) {
        $this->set_opt[CURLOPT_MAX_SEND_SPEED_LARGE] = $value;
        return $this;
    }

    function sshAuthTypes($value) {
        $this->set_opt[CURLOPT_SSH_AUTH_TYPES] = 'CURLSSH_AUTH_' . $value;
        return $this;
    }

    function ipResolve($value = 'WHATEVER') {
        $this->set_opt[CURLOPT_IPRESOLVE] = 'CURL_IPRESOLVE_' . $value;
        return $this;
    }

    /*
     * 
     * $value should be a string for the following values.
     * 
     */

    function caInfo($value) {
        $this->set_opt[CURLOPT_CAINFO] = $value;
        return $this;
    }

    function caPath($value) {
        $this->set_opt[CURLOPT_CAPATH] = $value;
        return $this;
    }

    function cookie($value) {
        $this->set_opt[CURLOPT_COOKIE] = $value;
        return $this;
    }

    function cookieFile($value) {
        $this->set_opt[CURLOPT_COOKIEFILE] = $value;
        return $this;
    }

    function cookieJar($value) {
        $this->set_opt[CURLOPT_COOKIEJAR] = $value;
        return $this;
    }

    function customRequest($value) {
        $this->set_opt[CURLOPT_CUSTOMREQUEST] = $value;
        return $this;
    }

    function egdSocket($value) {
        $this->set_opt[CURLOPT_EGDSOCKET] = $value;
        return $this;
    }

    function encoding($value) {
        $this->set_opt[CURLOPT_ENCODING] = $value;
        return $this;
    }

    function ftpPort($value) {
        $this->set_opt[CURLOPT_FTPPORT] = $value;
        return $this;
    }

    function interfaceName($value) {
        $this->set_opt[CURLOPT_INTERFACE] = $value;
        return $this;
    }

    function keyPasswd($value) {
        $this->set_opt[CURLOPT_KEYPASSWD] = $value;
        return $this;
    }

    function krb4Level($value) {
        $this->set_opt[CURLOPT_KRB4LEVEL] = $value;
        return $this;
    }

    function postFields($value) {
        $this->set_opt[CURLOPT_POSTFIELDS] = $value;
        return $this;
    }

    function proxy($value) {
        $this->set_opt[CURLOPT_PROXY] = $value;
        return $this;
    }

    function proxyUserPwd($value) {
        $this->set_opt[CURLOPT_PROXYUSERPWD] = $value;
        return $this;
    }

    function randomFile($value) {
        $this->set_opt[CURLOPT_RANDOM_FILE] = $value;
        return $this;
    }

    function range($value) {
        $this->set_opt[CURLOPT_RANGE] = $value;
        return $this;
    }

    function referer($value) {
        $this->set_opt[CURLOPT_REFERER] = $value;
        return $this;
    }

    function sshHostPublicKeyMD5($value) {
        $this->set_opt[CURLOPT_SSH_HOST_PUBLIC_KEY_MD5] = $value;
        return $this;
    }

    function sshPublicKeyFile($value) {
        $this->set_opt[CURLOPT_SSH_PUBLIC_KEYFILE] = $value;
        return $this;
    }

    function sshPrivateKeyfile($value) {
        $this->set_opt[CURLOPT_SSH_PRIVATE_KEYFILE] = $value;
        return $this;
    }

    function sslCipherList($value) {
        $this->set_opt[CURLOPT_SSL_CIPHER_LIST] = $value;
        return $this;
    }

    function sslCert($value) {
        $this->set_opt[CURLOPT_SSLCERT] = $value;
        return $this;
    }

    function sslCertPasswd($value) {
        $this->set_opt[CURLOPT_SSLCERTPASSWD] = $value;
        return $this;
    }

    function sslEngine($value) {
        $this->set_opt[CURLOPT_SSLENGINE] = $value;
        return $this;
    }

    function sslEngineDefault($value) {
        $this->set_opt[CURLOPT_SSLENGINE_DEFAULT] = $value;
        return $this;
    }

    function sslKey($value) {
        $this->set_opt[CURLOPT_SSLKEY] = $value;
        return $this;
    }

    function sslKeyPasswd($value) {
        $this->set_opt[CURLOPT_SSLKEYPASSWD] = $value;
        return $this;
    }

    function sslKeyType($value) {
        $this->set_opt[CURLOPT_SSLKEYTYPE] = $value;
        return $this;
    }

    function sslVerifyPeer($value = TRUE) {
        $this->set_opt[CURLOPT_SSL_VERIFYPEER] = $value;
        return $this;
    }

    function url($value) {
        $this->set_opt[CURLOPT_URL] = $value;
        return $this;
    }

    function userAgent($value) {
        $this->set_opt[CURLOPT_USERAGENT] = $value;
        return $this;
    }

    function userPwd($value) {
        $this->set_opt[CURLOPT_USERPWD] = $value;
        return $this;
    }

    /*
     * 
     * Execute connection
     * 
     */

    function curl() {
        curl_setopt_array($this->ch, $this->set_opt);
        $output = curl_exec($this->ch);
        curl_close($this->ch);
        return $output;
    }

}
