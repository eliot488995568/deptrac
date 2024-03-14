<?php

declare (strict_types=1);
namespace DEPTRAC_202403\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_202403\PhpParser\Node\Expr\AssignOp;
class Concat extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Concat';
    }
}
