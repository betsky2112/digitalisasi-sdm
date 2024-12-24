<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use DateTimeInterface;

class Cookie extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     *  Prefix
     * --------------------------------------------------------------------------
     *
     * Set a  name prefix if you need to avoid collisions.
     */
    public string $prefix = '';

    /**
     * --------------------------------------------------------------------------
     *  Expires Timestamp
     * --------------------------------------------------------------------------
     *
     * Default expires timestamp for s. Setting this to `0` will mean the
     *  will not have the `Expires` attribute and will behave as a session
     * .
     *
     * @var DateTimeInterface|int|string
     */
    public $expires = 0;

    /**
     * --------------------------------------------------------------------------
     *  Path
     * --------------------------------------------------------------------------
     *
     * Typically will be a forward slash.
     */
    public string $path = '/';

    /**
     * --------------------------------------------------------------------------
     *  Domain
     * --------------------------------------------------------------------------
     *
     * Set to `.your-domain.com` for site-wide s.
     */
    public string $domain = '';

    /**
     * --------------------------------------------------------------------------
     *  Secure
     * --------------------------------------------------------------------------
     *
     *  will only be set if a secure HTTPS connection exists.
     */
    public bool $secure = false;

    /**
     * --------------------------------------------------------------------------
     *  HTTPOnly
     * --------------------------------------------------------------------------
     *
     *  will only be accessible via HTTP(S) (no JavaScript).
     */
    public bool $httponly = true;

    /**
     * --------------------------------------------------------------------------
     *  SameSite
     * --------------------------------------------------------------------------
     *
     * Configure  SameSite setting. Allowed values are:
     * - None
     * - Lax
     * - Strict
     * - ''
     *
     * Alternatively, you can use the constant names:
     * - `::SAMESITE_NONE`
     * - `::SAMESITE_LAX`
     * - `::SAMESITE_STRICT`
     *
     * Defaults to `Lax` for compatibility with modern browsers. Setting `''`
     * (empty string) means default SameSite attribute set by browsers (`Lax`)
     * will be set on s. If set to `None`, `$secure` must also be set.
     *
     * @phpstan-var 'None'|'Lax'|'Strict'|''
     */
    public string $samesite = 'Lax';

    /**
     * --------------------------------------------------------------------------
     *  Raw
     * --------------------------------------------------------------------------
     *
     * This flag allows setting a "raw" , i.e., its name and value are
     * not URL encoded using `rawurlencode()`.
     *
     * If this is set to `true`,  names should be compliant of RFC 2616's
     * list of allowed characters.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-#attributes
     * @see https://tools.ietf.org/html/rfc2616#section-2.2
     */
    public bool $raw = false;
}
