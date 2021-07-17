<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2021/7/10
 * Time: 1:07
 */

namespace App\Tool\stage;


class CaseStage
{
    const STAGE_FINISH = 0;  // 案例效果
    const STAGE_START = 1;   // 前期
    const STAGE_DESIGNE = 2;  // 设计阶段
    const STAGE_WALL = 3;   // 墙体改造
    const STAGE_WATER = 4; // 水电阶段
    const STAGE_BRICK = 5; // 泥瓦工阶段
    const STAGE_WOOD = 6;  // 木工阶段
    const STAGE_PAINT = 7; // 油漆工阶段
    const STAGE_INSTALL = 8;  // 安装阶段
    const STAGE_CHECK = 9;  // 验收阶段
}