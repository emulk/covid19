import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Row, Col, Table } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import './VaccineComponent.css';

class Vaccine extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        const { t } = this.props;
        return (
            <Col className="vaccineComponentStyle">

                <Row className='vaccineTitle'>
                    <Col>
                        {t('Landscape of COVID-19 candidate vaccines.')}
                        </Col>
                </Row>
                <Row></Row>
                <Row className='vaccineSubTitle'>
                    <Col>
                        {t('10 candidate vaccines in clinical evaluation.')}
                    </Col>
                </Row>
                <Row className="vaccineDescription">
                    {t('A vaccine to prevent coronavirus disease 2019 (COVID-19) is perhaps the best hope for ending the pandemic.')}
                </Row>

                <Row>
                    <Col >
                        <Row>
                            <Table responsive hover className="vaccineTable table-hover ">
                                <thead>
                                    <tr>
                                        <th>{t('Platform')}</th>
                                        <th>{t('Type of candidate vaccine')}</th>
                                        <th>{t('Developer')}</th>
                                        <th>{t('Coronavirus target')}</th>
                                        <th>{t('Current stage of clinical evaluation')}</th>
                                        <th>{t('Same platform for non-Coronavirus candidates')}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Non-Replicating Viral Vector</td>
                                        <td>Adenovirus Type 5 Vector</td>
                                        <td>CanSino Biological Inc./Beijing Institute of Biotechnology</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="http://www.chictr.org.cn/showprojen.aspx?proj=52006" className="vaccineLink">Phase 2</a> <br /> <a href="http://www.chictr.org.cn/showprojen.aspx?proj=51154" className="vaccineLink">Phase 1</a> </td>
                                        <td>Ebola</td>
                                    </tr>
                                    <tr>
                                        <td>RNA</td>
                                        <td>LNP-encapsulated mRNA</td>
                                        <td>Moderna/NIAID</td>
                                        <td>SARS-CoV2</td>
                                        <td>Phase 2 (IND accepted) <br /><a href="https://clinicaltrials.gov/ct2/show/NCT04283461?term=vaccine&cond=covid-19&draw=2" className="vaccineLink">Phase 1</a></td>
                                        <td>multiple candidates</td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated</td>
                                        <td>Wuhan Institute of Biological Products/Sinopharm</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="http://www.chictr.org.cn/showprojen.aspx?proj=52227" className="vaccineLink">Phase 1/2</a></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated</td>
                                        <td>Beijing Institute of Biological Products/Sinopharm</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="http://www.chictr.org.cn/showproj.aspx?proj=53003" className="vaccineLink">Phase 1/2</a></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated + alum</td>
                                        <td>Sinovac</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="https://clinicaltrials.gov/ct2/show/NCT04383574?term=covid-19&cond=vaccine&cntry=CN&draw=2&rank=3" className="vaccineLink">Phase 1/2</a></td>
                                        <td>SARS</td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated</td>
                                        <td>Institute of Medical Biology , Chinese Academy of Medical Sciences</td>
                                        <td>SARS-CoV2</td>
                                        <td>Phase 1</td>
                                        <td>SARS</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector</td>
                                        <td>ChAdOx1-S</td>
                                        <td>University of Oxford/AstraZeneca/Serum Institute of India</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="https://clinicaltrials.gov/ct2/show/NCT04324606?term=vaccine&cond=covid-19&draw=2" className="vaccineLink">Phase 1/2</a></td>
                                        <td>MERS, influenza, TB, Chikungunya, Zika, MenB, plague </td>
                                    </tr>
                                    <tr>
                                        <td>Protein Subunit</td>
                                        <td>Full length recombinant SARs CoV-2 glycoprotein nanoparticle vaccine adjuvanted with Matrix M</td>
                                        <td>Novavax</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="https://clinicaltrials.gov/ct2/show/NCT04368988?term=vaccine&recrs=a&cond=covid-19&draw=2" className="vaccineLink">Phase 1/2</a></td>
                                        <td>RSV; CCHF, HPV, VZV, EBOV </td>
                                    </tr>
                                    <tr>
                                        <td>RNA</td>
                                        <td>3 LNP-mRNAs</td>
                                        <td>BioNTech/Fosun Pharma/Pfizer</td>
                                        <td>SARS-CoV2</td>
                                        <td><a href="https://www.clinicaltrialsregister.eu/ctr-search/search?query=BNT162-01" className="vaccineLink">Phase 1/2</a></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA plasmid vaccine with electroporation</td>
                                        <td>Inovio Pharmaceuticals</td>
                                        <td>SARS-CoV2</td>
                                        <td ><a href="https://clinicaltrials.gov/ct2/show/NCT04336410?term=inovio&cond=covid-19&draw=2&rank=1" className="vaccineLink">Phase 1</a></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </Table>
                        </Row>
                    </Col>
                </Row>
                <Row className="vaccineDescription">
                    {t('155 candidate vaccines in preclinical evaluation')}
                        </Row>
                <Row className="vaccineSubTitle">
                    {('Coronavirus vaccine challenges')}
                </Row>
                <Row className="vaccineDescription">
                    {t('Past research on vaccines for coronaviruses has also identified some challenges to developing a COVID-19 vaccine, including:')}
                </Row>
                <Row>
                    <Col>
                        <Row className="vaccineDescription">

                            <li><b>{t('Ensuring vaccine safety.')}</b></li>
                        </Row>
                        <Row className="vaccineDescription">
                            {t("Several vaccines for SARS have been tested in animals. Most of the vaccines improved the animals' survival but didn't prevent infection. Some vaccines also caused complications, such as lung damage. A COVID-19 vaccine will need to be thoroughly tested to make sure it's safe for humans.")}
                        </Row>
                    </Col>
                    <Col>
                    </Col>
                </Row>
                <Row>
                    <Col>
                    </Col>
                    <Col>
                        <Row className="vaccineDescription">
                            <li><b>{t('Providing long-term protection.')}</b></li>
                        </Row>
                        <Row className="vaccineDescription">
                            {t('After infection with coronaviruses, re-infection with the same virus — though usually mild and only happening in a fraction of people — is possible after a period of months or years. An effective COVID-19 vaccine will need to provide people with long-term infection protection.')}
                     </Row>
                    </Col>
                </Row>
                <Row>
                    <Col>
                        <Row className="vaccineDescription">
                            <li><b>{t('Protecting older people.')}</b></li></Row>
                        <Row className="vaccineDescription">
                            {t("People older than age 50 are at higher risk of severe COVID-19. But older people usually don't respond to vaccines as well as younger people. An ideal COVID-19 vaccine would work well for this age group.")}
                        </Row>
                    </Col>
                    <Col>
                    </Col>
                </Row>





                <Row>
                    <Col>
                        <Row>
                            <Table responsive hover className="vaccineTable table-hover ">
                                <thead>
                                    <tr>
                                        <th>{t('Platform')}</th>
                                        <th>{t('Type of candidate vaccine')}</th>
                                        <th>{t('Developer')}</th>
                                        <th>{t('Coronavirus target')}</th>
                                        <th>{t('Current stage of clinical evaluation')}</th>
                                        <th>{t('Same platform for non-Coronavirus candidates')}</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA Vaccine (GX-19)</td>
                                        <td>Genexine Consortium </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA with electroporation</td>
                                        <td>Karolinska Institute / Cobra Biologics (OPENCORONA Project)</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA plasmid vaccine</td>
                                        <td>Osaka University/ AnGes/ Takara Bio</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA</td>
                                        <td>Takis/Applied DNA Sciences/Evvivax</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>Plasmid DNA, Needle-Free Delivery</td>
                                        <td>Immunomic Therapeutics, Inc./EpiVax, Inc./PharmaJet</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>SARS</td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA plasmid vaccine</td>
                                        <td>Zydus Cadila</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA vaccine</td>
                                        <td>BioNet Asia</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA vaccine</td>
                                        <td>University of Waterloo</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>DNA vaccine</td>
                                        <td>Entos Pharmaceuticals</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>DNA</td>
                                        <td>bacTRL-Spike</td>
                                        <td>Symvivo</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated</td>
                                        <td>Beijing Minhai Biotechnology Co., Ltd.</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>TBD</td>
                                        <td>Osaka University/ BIKEN/ NIBIOHN</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated + CpG 1018</td>
                                        <td>Sinovac/Dynavax</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated + CpG 1018</td>
                                        <td>Valneva/Dynavax</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated</td>
                                        <td>Inactivated</td>
                                        <td>Research Institute for Biological Safety Problems, Rep of Kazakhstan</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Live Attenuated Virus </td>
                                        <td>Codon deoptimized live attenuated vaccines</td>
                                        <td>Codagenix/Serum Institute of India</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>HAV, InfA, ZIKV, FMD, SIV, RSV, DENV</td>
                                    </tr>
                                    <tr>
                                        <td>Live Attenuated Virus </td>
                                        <td>Codon deoptimized live attenuated vaccines</td>
                                        <td>Indian Immunologicals Ltd/Griffith University</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>MVA encoded VLP</td>
                                        <td>GeoVax/BravoVax</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>LASV, EBOV, MARV, HIV</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Ad26</td>
                                        <td>Janssen Pharmaceutical Companies </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>Ebola, HIV, RSV</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Replication defective Simian Adenovirus (GRAd) encoding SARS-CoV-2 S</td>
                                        <td>ReiThera/LEUKOCARE/Univercells </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>MVA-S encoded</td>
                                        <td>DZIF – German Center for Infection Research</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>Many</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>adenovirus-based NasoVAX expressing SARS2-CoV spike protein</td>
                                        <td>Altimmune</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>influenza</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Ad5 S (GREVAX™ platform)</td>
                                        <td>Greffex</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>MERS</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Ad5 S (GREVAX™ platform)</td>
                                        <td>Greffex</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>MERS</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Oral Ad5 S </td>
                                        <td>Stabilitech Biopharma Ltd</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>Zika, VZV, HSV2 and Norovirus </td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>adenovirus-based + HLA-matched peptides </td>
                                        <td>Valo Therapeutics Ltd</td>
                                        <td>SARS-CoV2</td>
                                        <td>Pan-Corona</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Oral Vaccine platform </td>
                                        <td>Vaxart </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pan-Corona</td>
                                        <td>InfA, CHIKV, LASV, NORV; EBOV, RVF,HBV, VEE</td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>MVA expressing structural proteins </td>
                                        <td>Centro Nacional Biotecnología (CNB-CSIC), Spain </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pan-Corona</td>
                                        <td>Multiple candidates </td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>Dendritic cell-based vaccine </td>
                                        <td>University of Manitoba </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Non-Replicating Viral Vector </td>
                                        <td>parainfluenza virus 5 (PIV5)-based vaccine expressing the spike protein </td>
                                        <td>University of Georgia/University of Iowa </td>
                                        <td>SARS-CoV2</td>
                                        <td>Pre-Clinical</td>
                                        <td>MERS</td>
                                    </tr>


                                </tbody>
                            </Table>
                        </Row>
                    </Col>
                </Row>
            </Col>
        );
    }

}



export default withRouter(withNamespaces()(Vaccine));