<?php
namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test")
 */
class DataBase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="pipeline-ORG")
     */
    protected $pipelineORG;

    /**
     * @ORM\Column(type="string", name="pipeline-AREA")
     */
    protected $pipelineAREA;

    /**
     * @ORM\Column(type="string", name="pipeline-LINE_NUMBER")
     */
    protected $pipelineLINE_NUMBER;

    /**
     * @ORM\Column(type="string", name="pipeline-PIPE_CLASS")
     */
    protected $pipelinePIPE_CLASS;

    /**
     * @ORM\Column(type="string", name="pipeline-MAIN_MATERIAL")
     */
    protected $pipelineMAIN_MATERIAL;

    /**
     * @ORM\Column(type="string", name="pipeline-PB_PIPELINE_CATEGORY")
     */
    protected $pipelinePB_PIPELINE_CATEGORY;

    /**
     * @ORM\Column(type="string", name="pipeline-FLUID_CODE")
     */
    protected $pipelineFLUID_CODE;

    /**
     * @ORM\Column(type="string", name="elements-MEMBER_1")
     */
    protected $elementsMEMBER_1;

    /**
     * @ORM\Column(type="string", name="elements-MEMBER_2")
     */
    protected $elementsMEMBER_2;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=4, name="characteristics-D_INCHES_MEMBER_1")
     */
    protected $characteristicsD_INCHES_MEMBER_1;

    /**
     * @ORM\Column(type="integer", name="characteristics-MEMBER_1_DIAMETER_MM")
     */
    protected $characteristicsMEMBER_1_DIAMETER_MM;

    /**
     * @ORM\Column(type="string", name="characteristics-THICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE")
     */
    protected $characteristicsTHICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=4, name="characteristics-THICKNESS_MEMBER_1_MM")
     */
    protected $characteristicsTHICKNESS_MEMBER_1_MM;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=4, name="characteristics-D_INCHES_MEMBER_2")
     */
    protected $characteristicsD_INCHES_MEMBER_2;

    /**
     * @ORM\Column(type="integer", name="characteristics-MEMBER_2_DIAMETER_MM")
     */
    protected $characteristicsMEMBER_2_DIAMETER_MM;

    /**
     * @ORM\Column(type="string", name="characteristics-THICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE")
     */
    protected $characteristicsTHICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=4, name="characteristics-THICKNESS_MEMBER_2_MM")
     */
    protected $characteristicsTHICKNESS_MEMBER_2_MM;

    /**
     * @ORM\Column(type="date", name="welding-WELDING_DATE")
     */
    protected $weldingWELDING_DATE;

    /**
     * @ORM\Column(type="string", name="welding-WELDING_METHOD")
     */
    protected $weldingWELDING_METHOD;

    /**
     * @ORM\Column(type="string", name="welding-TYPE_OF_WELDS")
     */
    protected $weldingTYPE_OF_WELDS;

    /**
     * @ORM\Column(type="string", name="welding-TYPE_OF_JOINT")
     */
    protected $weldingTYPE_OF_JOINT;

    /**
     * @ORM\Column(type="string", name="welding-NO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY")
     */
    protected $weldingNO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY;

    /**
     * @ORM\Column(type="string", name="welding-WELDER_S_STAMP_ROOT_PASS")
     */
    protected $weldingWELDER_S_STAMP_ROOT_PASS;

    /**
     * @ORM\Column(type="json", name="KSS")
     */
    protected $kss;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPipelineORG()
    {
        return $this->pipelineORG;
    }

    /**
     * @return mixed
     */
    public function getPipelineAREA()
    {
        return $this->pipelineAREA;
    }

    /**
     * @return mixed
     */
    public function getPipelineLINENUMBER()
    {
        return $this->pipelineLINE_NUMBER;
    }

    /**
     * @return mixed
     */
    public function getPipelinePIPECLASS()
    {
        return $this->pipelinePIPE_CLASS;
    }

    /**
     * @return mixed
     */
    public function getPipelineMAINMATERIAL()
    {
        return $this->pipelineMAIN_MATERIAL;
    }

    /**
     * @return mixed
     */
    public function getPipelinePBPIPELINECATEGORY()
    {
        return $this->pipelinePB_PIPELINE_CATEGORY;
    }

    /**
     * @return mixed
     */
    public function getPipelineFLUIDCODE()
    {
        return $this->pipelineFLUID_CODE;
    }

    /**
     * @return mixed
     */
    public function getElementsMEMBER1()
    {
        return $this->elementsMEMBER_1;
    }

    /**
     * @return mixed
     */
    public function getElementsMEMBER2()
    {
        return $this->elementsMEMBER_2;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsDINCHESMEMBER1()
    {
        return $this->characteristicsD_INCHES_MEMBER_1;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsMEMBER1DIAMETERMM()
    {
        return $this->characteristicsMEMBER_1_DIAMETER_MM;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsTHICKNESSMEMBER1IDENTIFICATIONSCHEDULE()
    {
        return $this->characteristicsTHICKNESS_MEMBER_1_IDENTIFICATION_SCHEDULE;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsTHICKNESSMEMBER1MM()
    {
        return $this->characteristicsTHICKNESS_MEMBER_1_MM;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsDINCHESMEMBER2()
    {
        return $this->characteristicsD_INCHES_MEMBER_2;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsMEMBER2DIAMETERMM()
    {
        return $this->characteristicsMEMBER_2_DIAMETER_MM;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsTHICKNESSMEMBER2IDENTIFICATIONSCHEDULE()
    {
        return $this->characteristicsTHICKNESS_MEMBER_2_IDENTIFICATION_SCHEDULE;
    }

    /**
     * @return mixed
     */
    public function getCharacteristicsTHICKNESSMEMBER2MM()
    {
        return $this->characteristicsTHICKNESS_MEMBER_2_MM;
    }

    /**
     * @return mixed
     */
    public function getWeldingWELDINGDATE()
    {
        return $this->weldingWELDING_DATE;
    }

    /**
     * @return mixed
     */
    public function getWeldingWELDINGMETHOD()
    {
        return $this->weldingWELDING_METHOD;
    }

    /**
     * @return mixed
     */
    public function getWeldingTYPEOFWELDS()
    {
        return $this->weldingTYPE_OF_WELDS;
    }

    /**
     * @return mixed
     */
    public function getWeldingTYPEOFJOINT()
    {
        return $this->weldingTYPE_OF_JOINT;
    }

    /**
     * @return mixed
     */
    public function getWeldingNOOFTHEJOINTASPERASBUILTSURVEY()
    {
        return $this->weldingNO_OF_THE_JOINT_AS_PER_AS_BUILT_SURVEY;
    }

    /**
     * @return mixed
     */
    public function getWeldingWELDERSSTAMPROOTPASS()
    {
        return $this->weldingWELDER_S_STAMP_ROOT_PASS;
    }

    /**
     * @return mixed
     */
    public function getKss()
    {
        return $this->kss;
    }
}
