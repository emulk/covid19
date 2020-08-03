import React, { Component } from 'react';
import { Row, Col } from 'react-bootstrap';
import { withNamespaces } from 'react-i18next';
import './CasesComponent.css';


class CasesComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        const { t } = this.props;
        return (
            <>
                <Col className="cases ">
                    <Row className="titleCases">
                        <Col>
                            {t('Total Confirmed Cases')}
                        </Col>
                    </Row>
                    <Row className="numberConfirmedCases">
                        <Col>
                            {this.props.TotalConfirmedCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col className="DataUpdateStyle">
                            {t('update')} {this.props.UpdatedTime}
                        </Col>
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            {t('Active Cases')}
                        </Col>
                    </Row>
                    <Row className="numberActiveCases">
                        <Col>
                            {this.props.TotalActiveCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageActiveCases}
                        </Col>
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            {t('Recovered Cases')}
                        </Col>
                    </Row>
                    <Row className="recoveredActiveCases">
                        <Col>
                            {this.props.TotalRecoveredCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageRecoveredCases}
                        </Col>
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            {t('Total Deceased')}
                        </Col>
                    </Row>
                    <Row className="deathCases">
                        <Col>
                            {this.props.TotalDecesdCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageTotalDecesdCases}
                        </Col>
                    </Row>
                </Col>
            </>
        );
    }
}

export default withNamespaces()(CasesComponent);