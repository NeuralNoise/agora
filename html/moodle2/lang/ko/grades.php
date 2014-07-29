<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'grades', language 'ko', branch 'MOODLE_26_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = '활동';
$string['addcategory'] = '범주 추가';
$string['addcategoryerror'] = '범주를 추가할 수 없음';
$string['addexceptionerror'] = 'userid:gradeitem의 예외 처리를 하는 동안 오류가  발생하였습니다.';
$string['addfeedback'] = '피드백 추가';
$string['addgradeletter'] = '성적 문자 추가';
$string['addidnumbers'] = 'ID 번호 추가';
$string['additem'] = '성적 항목 추가';
$string['addoutcome'] = '학습성과 추가';
$string['addoutcomeitem'] = '학습성과 항목 추가';
$string['addscale'] = '척도 추가';
$string['aggregateextracreditmean'] = '성적 평균 (가산점 포함)';
$string['aggregatemax'] = '최고 성적';
$string['aggregatemean'] = '성적 평균';
$string['aggregatemedian'] = '성적 중간값';
$string['aggregatemin'] = '최저 성적';
$string['aggregatemode'] = '최빈 성적';
$string['aggregateonlygraded'] = '비어있지 않은 성적만 집계';
$string['aggregateonlygraded_help'] = '빈 성적은 성적부에서 누락된 성적입니다. 채점되지 않은 과제 제출이나 시도되지 않은 퀴즈에서 온 것일 수 있습니다.

이 설정은 빈 성적이 집계에 포함되지 않을지 혹은  0과 100사이로 채점되는 과제에서 0점과 같이 최소 성적으로  포함될지를 결정합니다.';
$string['aggregateoutcomes'] = '집계에 학습성과 포함';
$string['aggregateoutcomes_help'] = '<p>집계에 학습성과를 포함하는 것이 원하는 전체 성적에 다다른다는 것이 아니기 때문에, 학습성과를 포함시킬지 말 것인지를 선택할 수 있는 것이다.</p>';
$string['aggregatesonly'] = '집계만';
$string['aggregatesubcats'] = '하위 범주를 포함한 집계';
$string['aggregatesubcats_help'] = '이 설정은 하위 범주의 성적이 집계에 포함될지를 결정합니다.';
$string['aggregatesum'] = '성적 합계';
$string['aggregateweightedmean'] = '성적 가중 평균';
$string['aggregateweightedmean2'] = '성적 단순 가중 평균';
$string['aggregation'] = '집계 전략';
$string['aggregationcoef'] = '집계 상수';
$string['aggregationcoefextra'] = '가산 점수';
$string['aggregationcoefextra_help'] = '집계가 성적의 합 혹은 단순 가중 평균이고, 추가 점수 체크박스가 체크되어 있으면 성적항목의 최대 점수는 범주의 최대 성적에 추가되지 않습니다. 결과적으로 모든 성적 항목에 최대 성적이 없는 범주에서 최대 성적(혹은 사이트 관리자가 활성화 하였다면 최대 아상의 성적)을 받을 가능성이 있습니다.

만일 집계가 성적 평균(추가 크레딧)이고 추가점수가 0보다 큰 점수로 설정되었다면 추가크레딧은 평균을 계산한 후에 총점에 더해지기전에 성적이 곱해지는 요소가 됩니다.';
$string['aggregationcoefextrasum'] = '가산 점수';
$string['aggregationcoefextrasum_help'] = '추가 점수 체크박스가 체크되어 있으면 성적항목의 최대 점수는 범주의 최대 성적에 추가되지 않습니다. 결과적으로 모든 성적 항목에 최대 성적이 없는 범주에서 최대 성적(혹은 사이트 관리자가 활성화 하였다면 최대 이상의 성적)을 받을 가능성이 있습니다.';
$string['aggregationcoefextraweight'] = '가산점 가중치';
$string['aggregationcoefextraweight_help'] = '추가 점수 가중치가 0보다 크게 설정되면  집계시 성적이 추가 점수로 반영됩니다. 이 수는 평균을 계산하기 위해 합계에 추가되기 전에 성적이 곱해지는 값입니다.';
$string['aggregationcoefweight'] = '항목 가중치';
$string['aggregationcoefweight_help'] = '항목 가중치는 같은 범주내의 다른 성적항목과 비교하여 항목의 중요도를 반영하기 위해 범주 집계 안에서 사용됩니다.';
$string['aggregation_help'] = '집계는 범주안에 있는 성적들이 조합될 것인지를 결정합니다.

* 평균 성적 - 모든 성적의 합계를 성적의 수로 나눔
* 중간 성적 - 성적을 크기 순서로 정렬했을 때 중앙 값
* 최저 성적
* 최고 성적
* 최빈 성적 - 가장 자주 발생한 성적
* 성적 합계 - 척도 성적을 무시하고 모든 성적 값의 합';
$string['aggregationposition'] = '총계의 위치';
$string['aggregationposition_help'] = '이 설정은 범주와 강좌 전체 열이 성적부 보고서에서 처음 혹은 나중에 표시될지를 결정합니다.';
$string['aggregationsvisible'] = '이용가능한 집계 유형';
$string['aggregationsvisiblehelp'] = '사용 가능한 집계 유형을 선택. 여러 항목을 선택하려면 Ctrl 키를 누르고 선택';
$string['allgrades'] = '범주별 모든 성적';
$string['allstudents'] = '모든 학생';
$string['allusers'] = '모두';
$string['autosort'] = '자동 정열';
$string['availableidnumbers'] = '사용가능한 ID 번호';
$string['average'] = '평균';
$string['averagesdecimalpoints'] = '항목 평균의 소수점';
$string['averagesdecimalpoints_help'] = '이 설정은 각각의 평균에 대해 소숫점 몇 자리까지 표시할 것인가 혹은  (상속에 의해) 범주 혹은 성적 항목에 대한 전반적인 소수점 설정이 사용될지를 결정합니다. ';
$string['averagesdisplaytype'] = '항목 평균 표시법';
$string['averagesdisplaytype_help'] = '이 설정은 평균 성적이 실제 성적, 백분율 성적 혹은 문자 성적으로 표시될지 혹은(상속에 의해)  범주나 성적 항목에 대한 표시 유형이 사용될지를 결정합니다.';
$string['backupwithoutgradebook'] = '백업은 성적부의 구성을 포함하지 않습니다';
$string['badgrade'] = '제공된 성적이 잘못 되었음';
$string['badlyformattedscale'] = '쉼표로 구분하여 값들을 입력하세요(최소 두 값 이상 필요)';
$string['baduser'] = '제공된 사용자가 잘못 되었음';
$string['bonuspoints'] = '보너스 점수';
$string['bulkcheckboxes'] = '일괄처리 체크박스';
$string['calculatedgrade'] = '산출된 성적';
$string['calculation'] = '계산';
$string['calculationadd'] = '계산 추가';
$string['calculationedit'] = '계산 수정';
$string['calculation_help'] = '성적 계산은 성적을 계산하기 위해 사용되는 공식입니다. 공식은 등호(=)로 시작하여야 하며 max, min, sum  과 같은 보통의 수학적 연산자를 사용해야 합니다. 필요하면 대괄호 사이에 다른 성적의  ID 번호를 입력해서 다른 성적 항목을 계산에 포함할 수 있습니다.';
$string['calculationsaved'] = '계산결과 저장됨';
$string['calculationview'] = '계산 보기';
$string['cannotaccessgroup'] = '선택한 모둠의 성적에 접근할 수 없습니다.';
$string['categories'] = '범주들';
$string['categoriesanditems'] = '범주와 항목';
$string['categoriesedit'] = '항목 및 범주 편집';
$string['category'] = '범주';
$string['categoryedit'] = '범주 편집';
$string['categoryname'] = '범주명';
$string['categorytotal'] = '범주 합계';
$string['categorytotalfull'] = '{$a->category} 합계';
$string['categorytotalname'] = '범주합계의 명칭';
$string['changedefaults'] = '초기값 변경';
$string['changereportdefaults'] = '보고서 기본설정 변경';
$string['chooseaction'] = '활동 선택';
$string['choosecategory'] = '범주 선택';
$string['combo'] = '탭 및 펼침메뉴';
$string['compact'] = '간결한';
$string['componentcontrolsvisibility'] = '이 채점 항목이 숨겨지는 여부는 활동 설정에서 제어됩니다.';
$string['contract'] = '계약 범주';
$string['controls'] = '제어';
$string['courseavg'] = '강좌 평균';
$string['coursegradecategory'] = '강좌 성적 범주';
$string['coursegradedisplaytype'] = '강좌 성적 표시 형식';
$string['coursegradedisplayupdated'] = '강좌의 성적 표시 형식이 업데이트 되었습니다.';
$string['coursegradesettings'] = '강좌 성적 설정';
$string['coursename'] = '강좌 이름';
$string['coursescales'] = '강좌 척도';
$string['coursesettings'] = '강좌 설정';
$string['coursesettingsexplanation'] = '강좌의 모든 참여자에게 성적부를 어떻게 제시할지를 설정';
$string['coursetotal'] = '강좌 합계';
$string['createcategory'] = '범주 생성';
$string['createcategoryerror'] = '새 범주를 생성할 수 없음';
$string['creatinggradebooksettings'] = '성적부 생성 설정';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = '현재의 상위 집계';
$string['curveto'] = '표준점수화';
$string['decimalpoints'] = '전체적인 소수점 자리수';
$string['decimalpoints_help'] = '이 설정은 각 성적에 대해 표시할 소숫점 자릿수를 결정합니다.. 이 설정은 소수 5자리까지의 정밀도로 계산되는 성적 계산에는 아무런  영향이 없습니다.';
$string['default'] = '기본';
$string['defaultprev'] = '기본 ({$a})';
$string['deletecategory'] = '범주 삭제';
$string['disablegradehistory'] = '성적 이력 비활성';
$string['disablegradehistory_help'] = '성적 관련 테이블에서 변경에 대한 이력 추적 비활성. 서버가 다소 빨라지며 데이터베이스 공간이 절약됩니다.';
$string['displaylettergrade'] = '문자 성적 표시';
$string['displaypercent'] = '퍼센트 표시';
$string['displaypoints'] = '점수 표시';
$string['displayweighted'] = '가중치 적용된 성적 표시';
$string['dropdown'] = '펼침메뉴';
$string['droplow'] = '최하위 낙제';
$string['droplowestvalue'] = '낙제 최하위 성적 값 설정';
$string['droplow_help'] = '이 설정은 명시된 수만큼의  최저 성적들이 집계에서 제외되도록 합니다.';
$string['dropped'] = '낙제';
$string['dropxlowest'] = '최하위 X 탈락';
$string['dropxlowestwarning'] = '알림 : 만약 최하 X 털어냄을 사용한다면 모든 범주안에 있는 성적 항목들은 같은 점수를 받을 것이다. 만일 점수가 다르게 나온다면 예측할수 없는 결과가 나올 수 있다.';
$string['duplicatescale'] = '척도 복제';
$string['edit'] = '편집';
$string['editcalculation'] = '계산 수정';
$string['editcalculationverbose'] = '{$a->category} {$a->itemmodule}{$a->itemname} 에 대해 계산 편집';
$string['editfeedback'] = '피드백 편집';
$string['editgrade'] = '성적 수정';
$string['editgradeletters'] = '문자 성적 수정';
$string['editoutcome'] = '학습성과 편집';
$string['editoutcomes'] = '학습성과 수정';
$string['editscale'] = '척도 편집';
$string['edittree'] = '범주 및 항목';
$string['editverbose'] = '{$a->category} {$a->itemmodule}{$a->itemname} 편집';
$string['enableajax'] = 'AJAX 활성화';
$string['enableajax_help'] = '채점자 보고서에 작동을 단순하고 신속하게 하는 AJAX 기능 레이어 추가. 사용자 브라우저에서 자바스크립트가 켜져 있어야 함.';
$string['enableoutcomes'] = '학습성과 활성화';
$string['enableoutcomes_help'] = '학습성과(신뢰성, 목표, 기준 혹은 표준)를 지원한다는 것은 학습성과 지침에 따른 하나 이상의 척도에 의거하여 성적을 산출한다는 것이다. 학습성과를 활성화하면 그러한 특별한 성적 산출이 사이트 전반에 걸쳐 가능하게 된다.';
$string['encoding'] = '엔코딩';
$string['errorcalculationbroken'] = '아마 순환 참조이거나 틀린 계산 공식';
$string['errorcalculationnoequal'] = '수식은 반드시 등호로 시작(=1+2)';
$string['errorcalculationunknown'] = '잘못된 수식';
$string['errorgradevaluenonnumeric'] = '다음에 대하여 낮고 높은 성적 대신 비수치적 성적을 받았습니다.';
$string['errornocalculationallowed'] = '이 항목에 대한 계산은 허용되지 않음';
$string['errornocategorisedid'] = '범주화되지 않은 id는 취할 수 없음!';
$string['errornocourse'] = '강좌 정보를 얻을 수 없음';
$string['errorreprintheadersnonnumeric'] = '해당 항목에 바르지 않은 값이 입력됨';
$string['errorsavegrade'] = '성적을 저장할 수 없습니다. 죄송합니다.';
$string['errorupdatinggradecategoryaggregateonlygraded'] = '성적 범주 ID {$a->id} 의 "비어있지 않은 항목만 집계" 설정을 업데이트하는 중에 오류';
$string['errorupdatinggradecategoryaggregateoutcomes'] = '성적 범주 ID {$a->id} 의 "집계에 학습성과 포함" 설정을 업데이트하는 중 오류';
$string['errorupdatinggradecategoryaggregatesubcats'] = '성적 범주 ID {$a->id} 의 "하위 범주를 포함하는 집계" 설정을 업데이트하는 중 오류';
$string['errorupdatinggradecategoryaggregation'] = '성적 범주 ID {$a->id} 의 집계 유형을 업데이트하는 중 오류';
$string['errorupdatinggradeitemaggregationcoef'] = '성적 범주 ID {$a->id} 의 집계 계수(가중치 혹은 부가점)를 업데이트하는 중 오류';
$string['excluded'] = '제외';
$string['excluded_help'] = '체크되면 성적이 어떤 집계에도 포함되지 않습니다.';
$string['expand'] = '범주 확장';
$string['export'] = '내보내기';
$string['exportalloutcomes'] = '모든 학습성과 내보내기';
$string['exportfeedback'] = '내보내기에 피드백을 포함';
$string['exportonlyactive'] = '유보된 사용자 제외';
$string['exportonlyactive_help'] = '내보내기 할때 등록이 활성화되어 있고 유보되지 않은 학생들만 포함';
$string['exportplugins'] = '플러그인 내보내기';
$string['exportsettings'] = '설정 내보내기';
$string['exportto'] = '내보낼 곳';
$string['extracreditvalue'] = '{$a}에 대한 추가 점수';
$string['extracreditwarning'] = '노트: 범주에 대한 모든 항목들을 추가 점수로 설정하면 성적 계산에서 항목들이 제거됩니다. ';
$string['feedback'] = '피드백';
$string['feedbackadd'] = '피드백 추가';
$string['feedbackedit'] = '피드백 수정';
$string['feedback_help'] = '이 상자에 성적에 대한 어떤 코멘트도 추가할 수 있습니다.';
$string['feedbacksaved'] = '피드백 저장됨';
$string['feedbackview'] = '피드백 보기';
$string['finalgrade'] = '최종 성적';
$string['finalgrade_help'] = '덮어쓰기 체크박스가 체크되어 있으면 성적이 추가되거나 수정될 것입니다.';
$string['fixedstudents'] = '고정된 학생 열';
$string['fixedstudents_help'] = '학생열을 정적으로 함으로써 학생열을 다 보면서 성적들을 수평으로 스크롤 할 수 있게 합니다.';
$string['forceoff'] = '강제:꺼짐';
$string['forceon'] = '강제:켜짐';
$string['forelementtypes'] = '선택한 {$a} 의 유형';
$string['forstudents'] = '학생들';
$string['full'] = '전부';
$string['fullmode'] = '모두 보기';
$string['fullview'] = '모두 보기';
$string['generalsettings'] = '기본 설정';
$string['grade'] = '성적';
$string['gradeadministration'] = '성적 관리';
$string['gradeanalysis'] = '성적 분석';
$string['gradebook'] = '성적부';
$string['gradebookhiddenerror'] = '성적부는 현재 학생이 아무 것도 볼 수 없게 설정 되어 있습니다.';
$string['gradebookhistories'] = '성적 이력';
$string['gradeboundary'] = '문자 성적 경계';
$string['gradeboundary_help'] = '이 설정은 문자 성적이 부여되는 최소 백분률 성적을 결정합니다.';
$string['gradecategories'] = '성적 범주';
$string['gradecategory'] = '성적 범주';
$string['gradecategoryonmodform'] = '성적 범주';
$string['gradecategoryonmodform_help'] = '이 설정은이 활동에 대한 성적이 성적부에서 배치되는 범주를 제어합니다.';
$string['gradecategorysettings'] = '범주 설정';
$string['gradedisplay'] = '성적 표시';
$string['gradedisplaytype'] = '성적 표시 형식';
$string['gradedisplaytype_help'] = '이 설정은 채점자 및 사용자 보고서에서 성적이 어떻게 표시될지를 결정합니다.

*.실제 - 실제 성적
* 백분율
* 문자 - 성적 범위를 나타내기 위해 문자나 단어가 사용됩니다.';
$string['gradedon'] = '채점됨: {$a}';
$string['gradeexport'] = '성적 내보내기';
$string['gradeexportcustomprofilefields'] = '성적 내보내기 사용자 맞춤 개인정보 항목';
$string['gradeexportcustomprofilefields_desc'] = '성적 내보내기 할때 사용자 맞춤 필드를 콤마로 분리해서 포함';
$string['gradeexportdecimalpoints'] = '성적 내보내기 소수점 자리수';
$string['gradeexportdecimalpoints_desc'] = '내보내기에 표시할 소수점 자리수. 내보내기 도중 변경될 수 있다.';
$string['gradeexportdisplaytype'] = '성적 내보내기 표시 형식';
$string['gradeexportdisplaytype_desc'] = '내보내기에서 성적은 실점수나 (최소 및 최대 성적을 참조한) 백분율 혹은 문자(A,B,C등)로 표시될 수 있습니다. 내보내기 도중에 덮어쓰기 될 수 있습니다.';
$string['gradeexportuserprofilefields'] = '성적 내보내기 사용자 맞춤 개인정보 항목';
$string['gradeexportuserprofilefields_desc'] = '성적 내보내기 할때 사용자 필드를 콤마로 분리해서 포함';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item} {$a->feedback}';
$string['gradehelp'] = '성적 도움말';
$string['gradehistorylifetime'] = '성적 이력 보유시한';
$string['gradehistorylifetime_help'] = '성적관련 테이블에서 이력을 보존하고자 하는 시간을 명시합니다. 가능한 길게 하는 것을 추천합니다. 성능문제가 있다거나 데이터베이스 공간이 부족한 경우 작은 값을 사용하십시요.';
$string['gradeimport'] = '성적 가져오기';
$string['gradeitem'] = '성적 항목';
$string['gradeitemaddusers'] = '채점에서 제외';
$string['gradeitemadvanced'] = '고급 성적 항목 옵션';
$string['gradeitemadvanced_help'] = '성적항목을 편집할때 고급으로 표시되어야 만 할 모든 요소를 선택하십시요.';
$string['gradeitemislocked'] = '이 활동은 성적부에서 잠겨 있습니다. 이 활동에서 변경된 성적들은 잠금이 해제되기 전까지는 성적부에 반영되지 않을 것입니다.';
$string['gradeitemlocked'] = '성적 잠김';
$string['gradeitemmembersselected'] = '성적에서 제외됨';
$string['gradeitemnonmembers'] = '성적에 포함됨';
$string['gradeitemremovemembers'] = '성적에 포함';
$string['gradeitems'] = '성적 항목들';
$string['gradeitemsettings'] = '성적 항목 설정';
$string['gradeitemsinc'] = '포함될 성적 항목들';
$string['gradeletter'] = '성적 문자';
$string['gradeletter_help'] = '성적 문자는 성적의 범위를 표시하기 위해 사용되는 A,B,C와 같은 문자나 매우우수, 우수, 통과등을 나타내는 단어들입니다.';
$string['gradeletternote'] = '성적 문자를 삭제하려면  그 문자에 대한 세가지 텍스트 영역중에 하나를 공백으로하고 제출을 클릭하십시요.';
$string['gradeletters'] = '문자 성적';
$string['gradelocked'] = '성적이 잠겨져 있습니다';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = '최고성적';
$string['grademax_help'] = '이 설정은 수치 성적 유형을 사용할때 최대 성적을 결정합니다. 활동 기반 성적에 대한 최대 성적은 활동 설정 페이지에서 설정합니다.';
$string['grademin'] = '최저 성적';
$string['grademin_help'] = '이 설정은 수치 성적 유형을 사용할때 최소 성적을 결정합니다. ';
$string['gradeoutcomeitem'] = '학습성과 항목 채점';
$string['gradeoutcomes'] = '학습성과';
$string['gradeoutcomescourses'] = '강좌 학습성과';
$string['gradepass'] = '통과 성적';
$string['gradepass_help'] = '이 설정은 통과하기 위한 최소 성적을 결정합니다. 이 값은 활동과 강좌이수완료에 사용됩니다. 성적부에서는 통과 성적은 초록으로, 실패 성적은 빨강색으로 강조표시됩니다.';
$string['gradepreferences'] = '성적 환경 설정';
$string['gradepreferenceshelp'] = '성적 환경 설정 도움말';
$string['gradepublishing'] = '성적 공개 가능';
$string['gradepublishing_help'] = '내보내기와 가져오기에서 공개 활성화: 내보낸 성적은 무들 사이트에 접속하지 않고도 그 URL을 접속하여 접근할 수 있습니다. 성적은 그러한 URL에 접속하여 다시 가져올 수 있습니다.(다른 사이트에서 공개된 성적을 무들사이트로 되가져올 수 있음을 의미 합니다) 기본적으로 관리자만 이 기능을 사용할 수 있지만, 다른 사람에게 이 권한을 부여할 때는, 부여하기 전에 사용자에게 충분히 개인정보 유출에 따른 위험성을 교육시켜야 합니다.(북마크 공유, 가속기 다운로드, IP제한 등의 위험)';
$string['gradereport'] = '성적 보고서';
$string['graderreport'] = '채점자 보고서';
$string['grades'] = '성적들';
$string['gradesforuser'] = '{$a->user} 의 성적';
$string['gradesonly'] = '성적만';
$string['gradessettings'] = '성적 설정';
$string['gradetype'] = '성적 유형';
$string['gradetype_help'] = '4가지 성적 유형이 있습니다.

* 없음 - 채점이 불가능합니다.
* 값- 최대, 최소가 있는 수치 값
* 척도 - 목록안의 항목
* 문장- 피드백만

값과 척도 성적만 집계가 가능합니다. 활동 기반 성적 항목의 성적 유형은 활동 설정 페이지에서 설정됩니다.';
$string['gradeview'] = '성적 보기';
$string['gradeweighthelp'] = '성적 가중치 도움말';
$string['groupavg'] = '모둠의 평균';
$string['hidden'] = '비공개';
$string['hiddenasdate'] = '숨긴 성적에 대한 제출일 보기';
$string['hiddenasdate_help'] = '사용자에게 성적이 공개되지 않을 때 \'대신 제출일을 보여줍니다.';
$string['hidden_help'] = '체크가 되면, 학생들에게 성적이 감추어집니다. 채점이 완료된 이후 성적을 공개하려면, 특정일까지 성적 감추어짐으로 설정하면 됩니다.';
$string['hiddenuntil'] = '비공개 시한';
$string['hiddenuntildate'] = '{$a} 까지 비공개';
$string['hideadvanced'] = '고급 기능 숨김';
$string['hideaverages'] = '평균 비공개';
$string['hidecalculations'] = '계산방법 숨김';
$string['hidecategory'] = '범주 비공개';
$string['hideeyecons'] = '보기/숨기기 아이콘 숨김';
$string['hidefeedback'] = '피드백 숨김';
$string['hideforcedsettings'] = '강제 설정 숨기기';
$string['hideforcedsettings_help'] = '강제로 설정된 내용을 보여주지 않음';
$string['hidegroups'] = '모둠 비공개';
$string['hidelocks'] = '잠금 비공개';
$string['hidenooutcomes'] = '학습성과 공개';
$string['hidequickfeedback'] = '빠른 피드백 숨김';
$string['hideranges'] = '범위 숨김';
$string['hidetotalifhiddenitems'] = '숨긴 항목이 포함되어 있을 때 전체 내용을 드러내지 않음';
$string['hidetotalifhiddenitems_help'] = '이 설정은 숨겨진 성적 항목을 가지고 있는 총점이 학생들에게 보여질 것인지 하이픈(-)으로 표시될 것인지를 결정합니다. 만일 보여지게 되면 총점은 숨겨진 항목을 제외하거나 포함하여 계산될 것입니다.

만일 숨겨진 항목이 제외되면 총점은 선생님이 성적보고서에서 보는 총점과 다를 수 있습니다. 선생님들은 숨겨진 혹은 숨겨지지 않은  모든 항목으로부터 계산된 총점을 보기 때문입니다. 숨겨진 항목이 포함되면 학생들은 숨겨진 항목을 계산해 낼 수도 있습니다.';
$string['hidetotalshowexhiddenitems'] = '숨긴 항목을 제외하고 전체를 내 보임';
$string['hidetotalshowinchiddenitems'] = '숨긴 항목을 포함해서 전체를 내 보임';
$string['hideverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} 숨기기';
$string['highgradeascending'] = '성적 오름차순 정렬';
$string['highgradedescending'] = '성적 내림차순 정렬';
$string['highgradeletter'] = '높음';
$string['identifier'] = '사용자 확인 방법';
$string['idnumbers'] = 'ID번호';
$string['import'] = '가져오기';
$string['importcsv'] = 'CSV 가져오기';
$string['importcustom'] = '(이강좌로) 맞춤 학습성과 가져오기';
$string['importerror'] = '오류 발생, 바른 파라메터로 스크립트가 호출되지 않았습니다.';
$string['importfailed'] = '가져오기 실패';
$string['importfeedback'] = '피드백 가져오기';
$string['importfile'] = '파일 가져오기';
$string['importfilemissing'] = '파일 받기 실패, 다시 가서 제대로 된 파일을 올리세요.';
$string['importfrom'] = '가져올 곳';
$string['importoutcomenofile'] = '올려진 파일이 깨졌거나 내용이 없습니다. 유효한 파일인지를 확인하기 바랍니다. 문제는 {$a} 째 줄에서 발생했으며, 이는 가져온 파일에 기대한 헤더가 존재하지 않았거나, 자료 라인에 (해더 라인인) 첫번째 줄에 나타난 칼럼수 만큼의 필드가 존재하지 않아서 벌어진 것일 수 있습니다. 연습삼아 내보낸 파일에 유효한 헤더가 존재하는지 살펴보라.';
$string['importoutcomes'] = '학습성과 가져오기';
$string['importoutcomes_help'] = '내보낸 방식인 csv 파일 형식으로 학습성과를 가져올 수 있음';
$string['importoutcomesuccess'] = '식별번호 {$a->id} "{$a->name}" 학습성과 가져옴';
$string['importplugins'] = '플러그인 가져오기';
$string['importpreview'] = '미리보기 가져오기';
$string['importsettings'] = '설정 가져오기';
$string['importskippednomanagescale'] = '새 척도를 추가할 수 있는 권한이 없으므로, 요구된 학습성과 "{$a}"는 추가되지 못했습니다.';
$string['importskippedoutcome'] = '단축명 "{$a}" 학습성과는 이 문맥에 이미 존재하므로 가져오기를 생략함';
$string['importstandard'] = '표준 학습성과로 가져오기';
$string['importsuccess'] = '성적 가져오기 성공';
$string['importxml'] = 'XML 가져오기';
$string['includescalesinaggregation'] = '집계에 척도 포함';
$string['includescalesinaggregation_help'] = '전 강좌의 모든 성적부의 집계된 성적에서 척도를 숫자로 변환하여 포함시킬지의 여부를 변경할 수 있습니다. 주의: 이 설정을 바꾸게 되면 모든 집계된 성적은 다시 계산 될 것입니다.';
$string['incorrectcourseid'] = '교과 아이디가 틀렸습니다.';
$string['incorrectcustomscale'] = '(바르지 않은 맞춤 척도, 변경바람)';
$string['incorrectminmax'] = '최소값은 최대값보다 작아야만 함';
$string['inherit'] = '상속';
$string['intersectioninfo'] = '학생/성적 정보';
$string['item'] = '항목';
$string['iteminfo'] = '항목 정보';
$string['iteminfo_help'] = '<p>항목에 대한 소개를 입력하는 공간. 이 곳에 입력된 문서는 다른 곳에서는 나타나지 않는다.</p>';
$string['itemname'] = '항목 이름';
$string['itemnamehelp'] = '이 항목에 대한 이름, 모듈에 의해 만들어짐.';
$string['items'] = '항목들';
$string['itemsedit'] = '성적 항목 편집';
$string['keephigh'] = '최고 점수 보관';
$string['keephigh_help'] = '설정되면 이 옵션은 X개의 최고 성적만 보유합니다. 여기서 X는 이 옵션에 대한 선택된 값입니다.';
$string['keymanager'] = '키 관리자';
$string['lessthanmin'] = '{$a->itemname} 에 대하여 {$a->username} 에게 입력된 성적은 허용된 최소값보다 작습니다.';
$string['letter'] = '문자';
$string['lettergrade'] = '문자 성적';
$string['lettergradenonnumber'] = '낮거나 높은 성적은 다음에 대해 숫자가 아니었습니다.';
$string['letterpercentage'] = '문자등급(백분률)';
$string['letterreal'] = '문자등급(실점수)';
$string['letters'] = '문자 등급';
$string['linkedactivity'] = '연결된 활동';
$string['linkedactivity_help'] = '이 설정은 학습 성과 항목과 연관된 활동을 명시합니다.
이는 활동 성적으로 평가되지 않는 기준에 의거하여 학생들의 능력을 측정하는데 활용될 수 있습니다.';
$string['linktoactivity'] = '{$a->name} 활동으로 연결';
$string['lock'] = '잠금';
$string['locked'] = '잠금';
$string['locked_help'] = '체크되면, 성적은 더 이상 연관된 활동 결과에 의해 자동으로 업데이트되지 못 합니다.';
$string['locktime'] = '잠금 시작';
$string['locktimedate'] = '{$a} 이후 잠김';
$string['lockverbose'] = '{$a->category}{$a->itemmodule} {$a->itemname} 잠금';
$string['lowest'] = '최저의';
$string['lowgradeletter'] = '낮음';
$string['manualitem'] = '수동처리 항목';
$string['mapfrom'] = '매핑소스';
$string['mappings'] = '성적 항목 매핑';
$string['mapto'] = '다음에 매핑';
$string['max'] = '최고의';
$string['maxgrade'] = '최고 성적';
$string['meanall'] = '모든 성적';
$string['meangraded'] = '비어있지 않은 성적';
$string['meanselection'] = '열 평균을 위해 선택된 성적들';
$string['meanselection_help'] = '이 설정은 각 범주 혹은 성적 항목에 대하여 평균을 계산할때 점수가 없는 셀이 포함될지를 결정합니다.';
$string['median'] = '중간값';
$string['min'] = '최저';
$string['missingscale'] = '척도가 선택되어야 합니다.';
$string['mode'] = '모드';
$string['morethanmax'] = '{$a->itemname} 에 대하여 {$a->username} 에게 입력된 성적은 최대 허용치보다 큽니다.';
$string['moveselectedto'] = '다음으로 선택항목 옮김 :';
$string['movingelement'] = '{$a} 이동';
$string['multfactor'] = '가중치';
$string['multfactor_help'] = '곱하기 수는 최대성적의 최대 값을 가지고 있는 성적 항목의 모든 성적에 대하여 곱해지는 수입니다. 예를 들어 곱하기 수가 2이고 최대 성적이 100이면 50보다 작은 모든 성적들은 2가 곱해지고 50이상 성적은 100이 됩니다.';
$string['multfactorvalue'] = '{$a}에 대한 Multiplicator 값';
$string['mypreferences'] = '개인 설정';
$string['myreportpreferences'] = '내 보고서 설정';
$string['navmethod'] = '찾아가기 방법';
$string['neverdeletehistory'] = '이력을 삭제하지 마시오';
$string['newcategory'] = '새 범주';
$string['newitem'] = '새 성적 항목';
$string['newoutcomeitem'] = '새 학습성과 항목';
$string['no'] = '아니오';
$string['nocategories'] = '성적 범주는 이 교육과정에서 추가되거나 보여지지 않습니다.';
$string['nocategoryname'] = '범주명이 없음';
$string['nocategoryview'] = '보여지는 항목이 없습니다.';
$string['nocourses'] = '아직 강좌가 없습니다.';
$string['noforce'] = '강요하지 않음';
$string['nogradeletters'] = '성적 문자가 설정되지 않았습니다.';
$string['nogradesreturned'] = '돌아온 성적이 없습니다.';
$string['noidnumber'] = 'ID 번호 없음';
$string['nolettergrade'] = '다음에 대해 문자 성적이 없습니다.';
$string['nomode'] = '지원되지 않습니다.';
$string['nonnumericweight'] = '비수치의 값을 받습니다.';
$string['nonunlockableverbose'] = '{$a->itemname} 가 해제되기 전까지는 이 성적은 잠금 해제될 수 없음';
$string['nonweightedpct'] = '가중치 퍼센트가 없습니다.';
$string['nooutcome'] = '학습성과 없음';
$string['nooutcomes'] = '학습성과의 항목은 강좌와 연결되어야만 하는데, 본 강좌에는 어떤 학습성과도 없습니다. 학습성과를 추가하시겠습니까?';
$string['nopublish'] = '비공개';
$string['norolesdefined'] = '관리>성적>일반설정> 채점되는 역할이 정의되지 않음';
$string['noscales'] = '학습성과는 반드시 강좌 혹은 전체의 척도와 연결되어야만 하는데, 현재 아무런 척도도 없습니다. 척도를 추가하시겠습니까?';
$string['noselectedcategories'] = '범주가 선택되지 않았음';
$string['noselecteditems'] = '항목이 지정되지 않았음';
$string['notteachererror'] = '선생님이어야만 이 기능을 사용할 수 있습니다.';
$string['nousersloaded'] = '어떤 사용자도 탑재되지 않음';
$string['numberofgrades'] = '성적 수';
$string['onascaleof'] = '{$a->grademin} 에서 {$a->grademax} 까지 척도에서';
$string['operations'] = '동작';
$string['options'] = '선택사항';
$string['outcome'] = '학습성과';
$string['outcomeassigntocourse'] = '본 강좌에 또 다른 학습성과 부여';
$string['outcomecategory'] = '범주내 학습성과 생성';
$string['outcomecategorynew'] = '새 범주';
$string['outcomeconfirmdelete'] = '정말 "{$a}" 학습성과를 삭제하겠습니까?';
$string['outcomecreate'] = '새 학습성과 추가';
$string['outcomedelete'] = '학습성과 삭제';
$string['outcomefullname'] = '전체 이름';
$string['outcome_help'] = '성적 항목을 나타내는 학습성과';
$string['outcomeitem'] = '학습성과 항목';
$string['outcomeitemsedit'] = '학습성과 항목 수정';
$string['outcomereport'] = '학습성과 보고서';
$string['outcomes'] = '학습성과';
$string['outcomescourse'] = '강좌 학습성과';
$string['outcomescoursecustom'] = '맞춤 학습성과(제거할 수 없음)';
$string['outcomescoursenotused'] = '표준 사용 안함';
$string['outcomescourseused'] = '표준 학습성과(제거할 수 없음)';
$string['outcomescustom'] = '맞춤 학습성과';
$string['outcomeshortname'] = '짧은 이름';
$string['outcomesstandard'] = '표준 학습성과';
$string['outcomesstandardavailable'] = '표준 학습성과 사용 가능';
$string['outcomestandard'] = '표준 학습성과';
$string['outcomestandard_help'] = '<p>표준 학습성과는 사이트 전반의 모든 강좌에 대해 활용될 수 있다.</p>';
$string['overallaverage'] = '전체 평균';
$string['overridden'] = '수정금지';
$string['overridden_help'] = '체크되면 성적은 관련된 활동에서 변경되지 않습니다.

성적이 채점자 보고서에서 편집될 때에는 덮어쓰기 체크박스가 자동으로 체크됩니다. 그러나 체크 해지되면 관련 활동에서 성적을 변경할 수 있습니다.';
$string['overriddennotice'] = '이 활동에 대한 최종 성적처리가 수동으로 조정되었습니다.';
$string['overridesitedefaultgradedisplaytype'] = '사이트 기본값 덮어쓰기';
$string['overridesitedefaultgradedisplaytype_help'] = '체크되면 사이트 기본값을 사용하는 대신에 강좌에 대해 성적 문자와 경계를 설정할 수 있습니다.';
$string['parentcategory'] = '상위 범주';
$string['pctoftotalgrade'] = '총 성적의 퍼센트';
$string['percent'] = '퍼센트';
$string['percentage'] = '백분율';
$string['percentageletter'] = '백분률(문자등급)';
$string['percentagereal'] = '백분률(실점수)';
$string['percentascending'] = '백분률로 오름차순 정렬';
$string['percentdescending'] = '백분률로 내림차순 정렬';
$string['percentshort'] = '%';
$string['plusfactor'] = '추가점';
$string['plusfactor_help'] = '오프셋은 곱하기가 적용된 후에 이 성적 항목에 대해서 모든 점수에 추가되는 수 입니다.';
$string['plusfactorvalue'] = '{$a}에 대한 오프셋 값';
$string['points'] = '점수';
$string['pointsascending'] = '점수로 오름차순 정렬';
$string['pointsdescending'] = '점수로 내림차순 정렬';
$string['positionfirst'] = '처음';
$string['positionlast'] = '마지막';
$string['preferences'] = '선택';
$string['prefgeneral'] = '일반';
$string['prefletters'] = '성적 문자와 경계';
$string['prefrows'] = '특별 행';
$string['prefshow'] = '보이기/감추기';
$string['previewrows'] = '열 미리보기';
$string['profilereport'] = '개인정보 보고서';
$string['profilereport_help'] = '사용자 개인정보 페이지에 성적 보고서가 사용됨';
$string['publishing'] = '공개';
$string['quickfeedback'] = '빠른 피드백';
$string['quickgrading'] = '일괄 채점';
$string['quickgrading_help'] = '활성화되어 있고 편집모드가 켜져 있으면 각 성적에 텍스트 입력 상자가 나타나서 많은 성적들을 동시에 편집할 수 있습니다. 새로고침 버튼이 클릭되면 변경사항이 저장되고 구별되어 표시됩니다.

성적이 채점자 보고서에서 편집될 때는 성적이 관련된 활동안에서 더 이상 변경될 수 없다는 것을 의미하는 덮어쓰기 표식이 설정됨을 주목하십시요.';
$string['range'] = '범위';
$string['rangedecimals'] = '범위 소수점';
$string['rangedecimals_help'] = '범위에 표시할 소수점 자리수';
$string['rangesdecimalpoints'] = '범위의 소수점';
$string['rangesdecimalpoints_help'] = '이 설정은 각 범위에 대해 표시할 소수점 자리수를 결정하거나 범주나 성적 항목에 대해 설정한 전반적인 소수점 자리수가 사용될지를 결정합니다.';
$string['rangesdisplaytype'] = '범위 표시 형식';
$string['rangesdisplaytype_help'] = '이 설정은 범위가 실제 성적, 백분율 또는 문자로 표시될지 혹은 (상속에 의해) 범주나 성적 항목에 대한 표시 유형이 사용될지를 결정합니다.';
$string['rank'] = '등위';
$string['rawpct'] = '원 %';
$string['real'] = '실점수';
$string['realletter'] = '실점수(문자등급)';
$string['realpercentage'] = '실점수(백분률)';
$string['recovergradesdefault'] = '성적 기본값 복원';
$string['recovergradesdefault_help'] = '강좌에서 사용자를 재 등록할 때 기본적으로 이전 성적을 복원합니다.';
$string['regradeanyway'] = '무조건 재채점';
$string['removeallcoursegrades'] = '모든 성적 삭제';
$string['removeallcourseitems'] = '모든 항목 및 범주 삭제';
$string['report'] = '보고서';
$string['reportdefault'] = '보고서 기본 설정({$a})';
$string['reportplugins'] = '보고서 플러그인';
$string['reportsettings'] = '출력 설정';
$string['reprintheaders'] = '리프린트 헤더';
$string['respectingcurrentdata'] = '현재의 설정을 고치지 않고 그대로 둠';
$string['rowpreviewnum'] = '행으로 미리보기';
$string['savechanges'] = '변경 사항 저장';
$string['savepreferences'] = '환경 설정 저장';
$string['scaleconfirmdelete'] = '정말, "{$a}" 척도를 삭제하겠습니까?';
$string['scaledpct'] = '범위 퍼센트';
$string['seeallcoursegrades'] = '모든 강좌 성적 보기';
$string['select'] = '{$a} 선택';
$string['selectalloroneuser'] = '한 사람 혹은 모두 선택';
$string['selectauser'] = '사용자 선택';
$string['selectdestination'] = '{$a} 가 이동할 곳 선택';
$string['separator'] = '구분선';
$string['sepcolon'] = '콜론';
$string['sepcomma'] = '콤마';
$string['sepsemicolon'] = '세미 콜론';
$string['septab'] = '탭';
$string['setcategories'] = '범주 설정';
$string['setcategorieserror'] = '가중치를 주기 전, 반드시 교육과정의 범주를 설정해야 합니다.';
$string['setgradeletters'] = '성적 문자 설정';
$string['setpreferences'] = '환경 설정';
$string['setting'] = '설정';
$string['settings'] = '설정들';
$string['setweights'] = '가중치 설정';
$string['showactivityicons'] = '활동 아이콘 보이기';
$string['showactivityicons_help'] = '<p>활동명 옆에 활동 아이콘을 보이게 할 것인지 말 것인지를 선택.</p>';
$string['showallhidden'] = '숨겨진것 보기';
$string['showallstudents'] = '모든 학생 보이기';
$string['showanalysisicon'] = '성적 분석 아이콘 표시';
$string['showaverage'] = '평균 보여주기';
$string['showaverage_help'] = '평균난을 보여줄까요?  만일 평균이 소수의 성적으로부터 계산된다면 다른 학생의 성적을 어림잡을 수 있습니다, 평균이 숨겨진 항목에 의존하는 경우 평균은 근사값이 됩니다.';
$string['showaverages'] = '열 평균 보이기';
$string['showaverages_help'] = '채점자 보고서에 열 평균 보이기';
$string['showcalculations'] = '계산 보이기';
$string['showcalculations_help'] = '각 성적 항목과 범주부근에 계산 아이콘, 계산된 항목위에 도구팁 및 열이 계산되었음을 나타내는 시각적 표시를 보여 줄 지 여부';
$string['showeyecons'] = '보기/숨김 아이콘 보이기';
$string['showeyecons_help'] = '각 성적부근에 보기/숨김 아이콘(사용자에게 보이는 것 제어)을 보여 줄지 여부';
$string['showfeedback'] = '피드백 보기';
$string['showfeedback_help'] = '피드백난 보여주기';
$string['showgrade'] = '성적 보여주기';
$string['showgrade_help'] = '성적난 보여주기';
$string['showgroups'] = '모둠 보이기';
$string['showhiddenitems'] = '숨겨진 항목 보기';
$string['showhiddenitems_help'] = '숨겨진 성적 항목이 완전히 숨겨질 것인가 아니면 숨겨진 성적 항목 이름이 학생들에게 보여질 것인가.

* 숨겨진 것 보이기 - 숨겨진 성적 항목 이름은 보여지지만 학생 성적은 숨겨짐
* 시한부 숨김 - 숨기는 일자가 설정된 성적 항목이 설정일까지 완전히 숨겨지지만, 그 이후로는 전체 항목이 보여진다.
*보여주지 않음 - 숨겨진 성적은 완전히 숨겨진다 ';
$string['showhiddenuntilonly'] = '다음까지 숨김';
$string['showlettergrade'] = '문자성적 보여주기';
$string['showlettergrade_help'] = '문자성적난을 보여주기';
$string['showlocks'] = '잠금 보이기';
$string['showlocks_help'] = '각 성적 부근에 잠금/잠금해제 아이콘을 보여줄지 여부';
$string['shownohidden'] = '보여주지 마세요';
$string['shownooutcomes'] = '학습성과 비공개';
$string['shownumberofgrades'] = '평균에 포함된 성적의 수 보이기';
$string['shownumberofgrades_help'] = '괄호로 각 성적의 옆에 집계될 성적의 수를 표시
예: 45(34)';
$string['showonlyactiveenrol'] = '활성화된 등록 만 보여주기';
$string['showpercentage'] = '백분율 보이기';
$string['showpercentage_help'] = '각 채점 항목의 백분율을 보여줄까요?';
$string['showquickfeedback'] = '빠른 피드백 보이기';
$string['showquickfeedback_help'] = '일괄 피드백은 한꺼번에 많은 피드백을 편집할 수 있도록 채점자 보고서의 각 셀에 문서 입력난을 추가합니다. 한번에 하나씩 저장하는 대신, 변경사항을 한꺼번에 저장하기 위해 업데이트 버튼을 클릭할 수 있습니다';
$string['showrange'] = '범위 보여주기';
$string['showrange_help'] = '범위난 보여주기';
$string['showranges'] = '범위 보이기';
$string['showranges_help'] = '채점자 보고서에서 각 채점 항목에 대해 가능한 범위를 보여주는 행 표시';
$string['showrank'] = '순위 보이기';
$string['showrank_help'] = '각 성적 항목에 대해 나머지 학생들에 대한 학생의 위치 보여주기';
$string['showuserimage'] = '사용자 사진 보이기';
$string['showuserimage_help'] = '채점자 보고서에서 이름 옆에 사용자의 개인정보 사진을 보여 줄지 여부';
$string['showverbose'] = '{$a->category}$a->itemmodule {$a->itemname} 보이기';
$string['showweight'] = '가중치 보여주기';
$string['showweight_help'] = '성적 가중치 난 보여주기';
$string['simpleview'] = '간단히 보기';
$string['sitewide'] = '전 사이트';
$string['sort'] = '정렬';
$string['sortasc'] = '오름차순으로 정렬';
$string['sortbyfirstname'] = '성으로 정렬';
$string['sortbylastname'] = '이름으로 정렬';
$string['sortdesc'] = '내림차순으로 정렬';
$string['standarddeviation'] = '표준 편차';
$string['stats'] = '통계치';
$string['statslink'] = '통계';
$string['student'] = '학생';
$string['studentsperpage'] = '페이지당 학생수';
$string['studentsperpage_help'] = '채점자 보고서 한 페이지에 나타낼 학생 수';
$string['subcategory'] = '보통 범주';
$string['submissions'] = '제출물들';
$string['submittedon'] = '제출됨: {$a}';
$string['switchtofullview'] = '모두 보기로 전환';
$string['switchtosimpleview'] = '간딘히 보기로 전환';
$string['tabs'] = '탭';
$string['topcategory'] = '상위 범주';
$string['total'] = '종합';
$string['totalweight100'] = '가중치의 합이 100입니다.';
$string['totalweightnot100'] = '가중치의 합이 100이 아닙니다.';
$string['turnfeedbackoff'] = '피드백 끄기';
$string['turnfeedbackon'] = '피드백 켜기';
$string['typenone'] = '없음';
$string['typescale'] = '척도';
$string['typescale_help'] = '이 설정은 척도 성적 유형을 사용할 때 사용되는 척도를 결정합니다. 활동 기반 성적 항목에 대한 척도는 활동 설정 페이지에서 설정됩니다.';
$string['typetext'] = '텍스트';
$string['typevalue'] = '값';
$string['uncategorised'] = '범주 없음';
$string['unchangedgrade'] = '성적이 변경되지 않음';
$string['unenrolledusersinimport'] = '가져온 성적 중 다음 사용자의 것은 아직 이 강좌에 등록되지 않은 사용자의 것임: {$a}';
$string['unlimitedgrades'] = '제한없는 성적';
$string['unlimitedgrades_help'] = '기본적으로 점수는 항목의 최소에서 최대점내로 국한된다. 만일 이 설정을 활성화시켜 이러한 제한을 풀게되면 성적표에서 직접 100%이상의 득점을 허용하게 됩니다. 서버에 부하를 줄 수 있기 때문에, 모든 점수를 재계산할 때와 같이 서버가 바쁠 때를 피하여 이를 활성화하기를 권장합니다.';
$string['unlock'] = '잠금해제';
$string['unlockverbose'] = '{$a->category}  {$a->itemmodule}{$a->itemname} 잠금 해제';
$string['unused'] = '사용안됨';
$string['updatedgradesonly'] = '새 성적이나 업데이트된 성적만 내보내기';
$string['uploadgrades'] = '성적 올리기';
$string['useadvanced'] = '고급 기능 사용';
$string['usedcourses'] = '사용된 강좌';
$string['usedgradeitem'] = '사용된 성적 항목';
$string['usenooutcome'] = '학습성과 사용하지 않음';
$string['usenoscale'] = '척도 사용하지 않음';
$string['usepercent'] = '백분률 사용';
$string['user'] = '사용자';
$string['userenrolmentsuspended'] = '사용자 등록이 보류되었습니다.';
$string['usergrade'] = '{$a->gradeidnumber} 항목의 사용자 {$a->fullname} ({$a->useridnumber})';
$string['userpreferences'] = '사용자 선택사항';
$string['useweighted'] = '가중치 사용';
$string['verbosescales'] = 'Verbose 척도';
$string['viewbygroup'] = '모둠';
$string['viewgrades'] = '성적 보기';
$string['warningexcludedsum'] = '경고: 점수를 제외시키는 것은 집계 전략에 맞지 않음';
$string['weight'] = '가중치';
$string['weightcourse'] = '강좌에 대한 가중된 성적 사용';
$string['weightedascending'] = '가중된 백분률로 오름차순 정렬';
$string['weighteddescending'] = '가중된 백분률로 내림차순 정렬';
$string['weightedpct'] = '가중된 백분룔';
$string['weightedpctcontribution'] = '가중된 백분률의 기여도';
$string['weightorextracredit'] = '가중치 혹은 부가점';
$string['weights'] = '가중치';
$string['weightsedit'] = '가중치 및 부가점 수정';
$string['weightuc'] = '가중치';
$string['writinggradebookinfo'] = '성적부 쓰기 설정';
$string['xml'] = 'XML형식';
$string['yes'] = '예';
$string['yourgrade'] = '당신의 성적';
