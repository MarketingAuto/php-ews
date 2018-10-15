<?php

namespace garethp\ews\API\Message;

use garethp\ews\API\Type;


class ArrayOfRecipientsType extends Type
{

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType[]
     */
    public $Mailbox = array();
}
