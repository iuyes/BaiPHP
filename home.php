<?php
/**
 * <h2>BaiPHP（简单PHP）开发框架</h2>
 * <p>
 * BaiPHP（简单PHP）开发框架依据服务-流程-工场模式进行设计。</br>
 * 该模式于2011年3月由白晓阳提出，将应用程序划分为服务、流程和工场三部分。
 * <h3>工场</h3>
 * 1.工场只开放一个常规公开入口（如果必须开放其他入口，也应是静态入口）；<br/>
 * 2.工场（理论上）只做一件事情或者一类事情；<br/>
 * 3.工场（理论上）是独立的，封闭的；<br/>
 * 4.工场相对固定，不随入口数据的变化而变化；<br/>
 * 5.工场具备动态执行自己的方法的能力；<br/>
 * 6.工场能够按照预置流程（像一道流水线一样）智能运作。<br/>
 * <h3>流程</h3>
 * 1.流程只开放一个常规公开入口；<br/>
 * 2.流程具备动态获取与使用工场和其他流程的能力；<br/>
 * 3.流程通过有序的组织工场以及与其他流程相复合，进而完成高级的复杂的任务；<br/>
 * 4.流程相对易变，入口数据的不同可能导致流程的改变；<br/>
 * <h3>服务</h3>
 * 1.服务位于程序的最前端，直接与客户打交道。他接受客户的数据和事件，<br/>
 *   委派流程进行处理，并向客户显示和反馈信息。<br/>
 * 2.服务由两部分组成：一部分负责组织界面，一部分负责组织信息。<br/>
 * 3.服务可有若干个界面入口，但只有一个信息出口用于委派流程。<br/>
 * 4.服务一直在变，因为需求永不满足。<br/>
 * </p>
 * @author    白晓阳
 * @copyright Copyright (c) 2011 - 2012, 白晓阳
 * @link      http://dacbe.com
 * @version   V1.0.0 2012/03/20 首版
 *            V2.0.0 2012/08/21 增加公共基类Bai与工场Event，重写公共函数和配置文件，优化部分代码
 * <p>版权所有，保留一切权力。未经许可，不得用于商业用途。</p>
 * <p>欢迎提供捐助。任何捐助者自动获得仅限于捐助者自身的商业使用（不包括再发行和再授权）授权。</p>
 */

/**
 * <h2>BaiPHP（简单PHP）开发框架</h2>
 * <h3>单一访问入口</h3>
 * <p>
 * 启动框架
 * </p>
 * @author  白晓阳
 */


/** 启动时间 */
define('_START', microtime(true));

### 加载启动引擎
require 'bai/php/engine.php';

### 启动目标并交付结果
$target = new Target(array('config.php', 'ready.php'));
echo $target->entrust();
